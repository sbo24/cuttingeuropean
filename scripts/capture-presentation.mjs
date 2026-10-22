import { chromium } from 'playwright';
import fs from 'fs';
import path from 'path';

const outDir = path.resolve('public/presentation');
if (!fs.existsSync(outDir)) {
  fs.mkdirSync(outDir, { recursive: true });
}

async function run() {
  console.log('Capturando mockups sin cookies y con encuadres optimizados...');
  const browser = await chromium.launch({ headless: true });
  const context = await browser.newContext({
    viewport: { width: 1440, height: 900 },
    deviceScaleFactor: 2
  });

  const page = await context.newPage();

  // Pre-seed cookie consent in localStorage before navigation
  await page.addInitScript(() => {
    localStorage.setItem('ce_cookie_consent', 'all');
  });

  // 1. Home - Slide 0 (Hero)
  await page.goto('http://localhost:8000', { waitUntil: 'networkidle' });
  await page.evaluate(() => {
    document.querySelector('[x-data="cookieConsent()"]')?.remove();
  });
  await page.waitForTimeout(500);

  await page.screenshot({
    path: path.join(outDir, '01_hero_slide_0.png'),
    clip: { x: 0, y: 0, width: 1440, height: 860 }
  });

  // 2. Home - Slide 1 (Click next slide)
  await page.evaluate(() => {
    const nextBtn = document.querySelector('button[aria-label="Siguiente diapositiva"]');
    if (nextBtn) nextBtn.click();
  });
  await page.waitForTimeout(400);
  await page.screenshot({
    path: path.join(outDir, '02_hero_slide_1.png'),
    clip: { x: 0, y: 0, width: 1440, height: 860 }
  });

  // 3. Home - Bento Grid (Scroll directly into view)
  await page.evaluate(() => {
    const bentoHeading = Array.from(document.querySelectorAll('h2')).find(h => h.textContent.includes('máximo') || h.textContent.includes('rendimiento'));
    if (bentoHeading) {
      bentoHeading.scrollIntoView({ behavior: 'instant', block: 'start' });
      window.scrollBy(0, -40);
    } else {
      window.scrollTo(0, 950);
    }
  });
  await page.waitForTimeout(500);
  await page.screenshot({
    path: path.join(outDir, '04_bento_machinery.png'),
    clip: { x: 0, y: 0, width: 1440, height: 860 }
  });

  // 4. Footer & Contact Bar
  await page.goto('http://localhost:8000', { waitUntil: 'networkidle' });
  await page.evaluate(() => {
    document.querySelector('[x-data="cookieConsent()"]')?.remove();
    const footer = document.querySelector('footer');
    if (footer) {
      footer.scrollIntoView({ behavior: 'instant', block: 'end' });
    }
  });
  await page.waitForTimeout(500);
  const footerElement = await page.$('footer');
  if (footerElement) {
    await footerElement.screenshot({
      path: path.join(outDir, '05_footer_branding.png')
    });
  }

  // 5. SAT Page
  await page.goto('http://localhost:8000/servicio-tecnico', { waitUntil: 'networkidle' });
  await page.evaluate(() => {
    document.querySelector('[x-data="cookieConsent()"]')?.remove();
  });
  await page.waitForTimeout(400);
  await page.screenshot({
    path: path.join(outDir, '07_service_sat.png'),
    clip: { x: 0, y: 0, width: 1440, height: 860 }
  });

  // 6. Contact Page
  await page.goto('http://localhost:8000/contacto', { waitUntil: 'networkidle' });
  await page.evaluate(() => {
    document.querySelector('[x-data="cookieConsent()"]')?.remove();
  });
  await page.waitForTimeout(400);
  await page.screenshot({
    path: path.join(outDir, '06_contact_page.png'),
    clip: { x: 0, y: 0, width: 1440, height: 860 }
  });

  await browser.close();
  console.log('Capturas impecables guardadas.');
}

run().catch(console.error);
