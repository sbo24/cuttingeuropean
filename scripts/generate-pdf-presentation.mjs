import fs from 'fs';
import path from 'path';
import { chromium } from 'playwright';

const presentationDir = path.resolve('public/presentation');

// Helper to get base64 data URI
function getBase64Image(filename) {
  const filePath = path.join(presentationDir, filename);
  if (!fs.existsSync(filePath)) {
    console.warn(`File not found: ${filePath}`);
    return '';
  }
  const ext = path.extname(filename).replace('.', '');
  const mime = ext === 'png' ? 'image/png' : ext === 'jpg' || ext === 'jpeg' ? 'image/jpeg' : 'image/webp';
  const data = fs.readFileSync(filePath).toString('base64');
  return `data:${mime};base64,${data}`;
}

const imgHero0 = getBase64Image('01_hero_slide_0.png');
const imgHero1 = getBase64Image('02_hero_slide_1.png');
const imgBento = getBase64Image('04_bento_machinery.png');
const imgFooter = getBase64Image('05_footer_branding.png');
const imgContact = getBase64Image('06_contact_page.png');
const imgSat = getBase64Image('07_service_sat.png');
const imgMobile = getBase64Image('08_mobile_mockup.png');
const imgFullHome = getBase64Image('full_home.png');

const htmlContent = `<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Cutting European - Dossier & Mockup Presentation</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=Space+Grotesk:wght@600;700&display=swap" rel="stylesheet">
  <style>
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }
    
    body {
      font-family: 'Plus Jakarta Sans', -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;
      color: #0f172a;
      background-color: #cbdcf8;
      -webkit-font-smoothing: antialiased;
    }

    @page {
      size: 1600px 1050px;
      margin: 0;
    }

    .slide {
      width: 1600px;
      height: 1050px;
      page-break-after: always;
      position: relative;
      overflow: hidden;
      display: flex;
      flex-direction: column;
      background: linear-gradient(135deg, #b8d2f7 0%, #d4e4fa 50%, #c4dbf8 100%);
      padding: 50px 70px;
    }

    /* Ambient decorative circles */
    .slide::before {
      content: '';
      position: absolute;
      top: -100px;
      right: -100px;
      width: 600px;
      height: 600px;
      border-radius: 50%;
      background: radial-gradient(circle, rgba(255, 255, 255, 0.4) 0%, rgba(255, 255, 255, 0) 70%);
      pointer-events: none;
    }

    .slide::after {
      content: '';
      position: absolute;
      bottom: -150px;
      left: -150px;
      width: 500px;
      height: 500px;
      border-radius: 50%;
      background: radial-gradient(circle, rgba(37, 99, 235, 0.08) 0%, rgba(37, 99, 235, 0) 70%);
      pointer-events: none;
    }

    /* Slide Header */
    .slide-header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 35px;
      position: relative;
      z-index: 10;
    }

    .brand-tag {
      display: inline-flex;
      align-items: center;
      gap: 10px;
      background: rgba(255, 255, 255, 0.85);
      backdrop-filter: blur(12px);
      border: 1px solid rgba(255, 255, 255, 0.9);
      padding: 8px 18px;
      border-radius: 100px;
      font-weight: 700;
      font-size: 13px;
      letter-spacing: 0.06em;
      text-transform: uppercase;
      color: #1e3a8a;
      box-shadow: 0 4px 15px -3px rgba(30, 58, 138, 0.12);
    }

    .brand-tag-dot {
      width: 8px;
      height: 8px;
      border-radius: 50%;
      background: #2563eb;
    }

    .slide-title-wrap h1 {
      font-family: 'Space Grotesk', sans-serif;
      font-size: 32px;
      font-weight: 700;
      color: #0b1528;
      letter-spacing: -0.02em;
    }

    .slide-title-wrap p {
      font-size: 15px;
      color: #475569;
      margin-top: 4px;
      font-weight: 500;
    }

    .slide-badge {
      background: #0b1528;
      color: #ffffff;
      padding: 8px 18px;
      border-radius: 100px;
      font-size: 13px;
      font-weight: 700;
      letter-spacing: 0.05em;
    }

    /* =========================================
       SLIDE 1: OVERVIEW MOCKUP (LIKE REFERENCE)
       ========================================= */
    .showcase-container {
      flex: 1;
      display: flex;
      gap: 50px;
      align-items: center;
      justify-content: center;
      position: relative;
      z-index: 5;
    }

    .mockup-card {
      background: #ffffff;
      border-radius: 24px;
      box-shadow: 0 40px 80px -20px rgba(15, 30, 65, 0.45), 0 0 0 1px rgba(255, 255, 255, 0.9);
      overflow: hidden;
      position: relative;
      transition: all 0.3s ease;
    }

    .mockup-primary {
      width: 760px;
      height: 800px;
      transform: translateY(10px);
      z-index: 6;
      display: flex;
      flex-direction: column;
    }

    .mockup-secondary {
      width: 660px;
      height: 740px;
      transform: translateY(40px);
      z-index: 5;
      display: flex;
      flex-direction: column;
    }

    .browser-bar {
      background: #f8fafc;
      border-bottom: 1px solid #e2e8f0;
      padding: 14px 20px;
      display: flex;
      align-items: center;
      gap: 14px;
    }

    .browser-dots {
      display: flex;
      gap: 7px;
    }

    .dot {
      width: 11px;
      height: 11px;
      border-radius: 50%;
    }
    .dot-red { background: #ef4444; }
    .dot-yellow { background: #f59e0b; }
    .dot-green { background: #10b981; }

    .browser-url {
      flex: 1;
      background: #ffffff;
      border: 1px solid #e2e8f0;
      border-radius: 8px;
      padding: 5px 14px;
      font-size: 12px;
      color: #64748b;
      display: flex;
      align-items: center;
      gap: 8px;
      font-family: monospace;
    }

    .browser-content {
      flex: 1;
      overflow: hidden;
      background: #f1f5f9;
      position: relative;
    }

    .browser-content img {
      width: 100%;
      display: block;
    }

    /* Floating Annotation Tags */
    .floating-tag {
      position: absolute;
      background: rgba(11, 21, 40, 0.92);
      backdrop-filter: blur(10px);
      color: white;
      padding: 10px 18px;
      border-radius: 14px;
      box-shadow: 0 15px 30px rgba(0, 0, 0, 0.3);
      border: 1px solid rgba(255, 255, 255, 0.15);
      font-size: 13px;
      z-index: 20;
      display: flex;
      align-items: center;
      gap: 10px;
    }

    .floating-tag-num {
      width: 24px;
      height: 24px;
      border-radius: 50%;
      background: #2563eb;
      color: white;
      display: flex;
      align-items: center;
      justify-content: center;
      font-weight: 800;
      font-size: 11px;
    }

    .tag-hero-pos {
      top: 140px;
      left: -25px;
    }

    .tag-bento-pos {
      bottom: 120px;
      right: -25px;
    }

    /* =========================================
       DETAILED BREAKDOWN SLIDES (SPLIT VIEW)
       ========================================= */
    .detail-grid {
      flex: 1;
      display: grid;
      grid-template-columns: 880px 1fr;
      gap: 50px;
      align-items: center;
      position: relative;
      z-index: 5;
    }

    .detail-mockup-frame {
      background: #ffffff;
      border-radius: 22px;
      box-shadow: 0 35px 70px -15px rgba(15, 30, 65, 0.4), 0 0 0 1px rgba(255, 255, 255, 0.9);
      overflow: hidden;
      position: relative;
      height: 780px;
      display: flex;
      flex-direction: column;
    }

    .detail-mockup-frame .browser-content {
      overflow-y: hidden;
    }

    .pins-container {
      position: absolute;
      inset: 0;
      pointer-events: none;
    }

    .pin {
      position: absolute;
      width: 34px;
      height: 34px;
      border-radius: 50%;
      background: #2563eb;
      color: white;
      font-weight: 800;
      font-size: 14px;
      display: flex;
      align-items: center;
      justify-content: center;
      box-shadow: 0 0 0 5px rgba(37, 99, 235, 0.3), 0 8px 20px rgba(0, 0, 0, 0.35);
      border: 2px solid #ffffff;
      z-index: 30;
      animation: pulse 2s infinite;
    }

    /* Explanations List */
    .explanations-list {
      display: flex;
      flex-direction: column;
      gap: 20px;
    }

    .exp-card {
      background: rgba(255, 255, 255, 0.9);
      backdrop-filter: blur(12px);
      border-radius: 18px;
      padding: 22px 26px;
      border: 1px solid rgba(255, 255, 255, 0.95);
      box-shadow: 0 10px 25px -5px rgba(20, 45, 90, 0.1);
      position: relative;
    }

    .exp-header {
      display: flex;
      align-items: center;
      gap: 14px;
      margin-bottom: 10px;
    }

    .exp-num {
      width: 32px;
      height: 32px;
      border-radius: 10px;
      background: #2563eb;
      color: #ffffff;
      display: flex;
      align-items: center;
      justify-content: center;
      font-weight: 800;
      font-size: 14px;
      box-shadow: 0 4px 10px rgba(37, 99, 235, 0.3);
    }

    .exp-title {
      font-family: 'Space Grotesk', sans-serif;
      font-size: 18px;
      font-weight: 700;
      color: #0b1528;
    }

    .exp-desc {
      font-size: 14px;
      line-height: 1.6;
      color: #475569;
      font-weight: 500;
    }

    .exp-tag {
      display: inline-block;
      margin-top: 10px;
      background: #eff6ff;
      color: #1d4ed8;
      font-size: 11px;
      font-weight: 700;
      text-transform: uppercase;
      padding: 4px 10px;
      border-radius: 6px;
      letter-spacing: 0.04em;
    }

    /* Footer Info Bar */
    .slide-footer-info {
      position: absolute;
      bottom: 25px;
      left: 70px;
      right: 70px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      font-size: 12px;
      color: #64748b;
      font-weight: 600;
      border-top: 1px solid rgba(255, 255, 255, 0.5);
      padding-top: 15px;
    }
  </style>
</head>
<body>

  <!-- ==========================================
       SLIDE 1: MOCKUP SHOWROOM PRINCIPAL (COMO LA IMAGEN)
       ========================================== -->
  <div class="slide">
    <div class="slide-header">
      <div class="brand-tag">
        <span class="brand-tag-dot"></span>
        CUTTING MACHINE · Especialistas del Corte
      </div>
      <div class="slide-title-wrap" style="text-align: center;">
        <h1>Dossier de Presentación & Mockups Web</h1>
        <p>Arquitectura digital, desglose por secciones y estándares de corte industrial</p>
      </div>
      <div class="slide-badge">PRESENTACIÓN TÉCNICA 2026</div>
    </div>

    <div class="showcase-container">
      <!-- Floating Pill Annotation Left -->
      <div class="floating-tag tag-hero-pos">
        <div class="floating-tag-num">01</div>
        <div>
          <strong style="color: #60a5fa;">Hero & Navegación</strong>
          <div style="font-size: 11px; color: #cbd5e1;">Carrusel soft dissolve + Logo 32px</div>
        </div>
      </div>

      <!-- Primary Mockup: Home Top & Middle -->
      <div class="mockup-card mockup-primary">
        <div class="browser-bar">
          <div class="browser-dots">
            <div class="dot dot-red"></div>
            <div class="dot dot-yellow"></div>
            <div class="dot dot-green"></div>
          </div>
          <div class="browser-url">
            <span>🔒</span> https://cuttingeuropean.com/ — Especialistas del Corte Industrial
          </div>
        </div>
        <div class="browser-content">
          <img src="${imgHero0}" alt="Cutting European Hero" style="width: 100%; object-fit: cover;">
          <img src="${imgBento}" alt="Bento Grid Maquinaria" style="width: 100%; object-fit: cover; margin-top: -10px;">
        </div>
      </div>

      <!-- Secondary Mockup: SAT & Mobile/Footer -->
      <div class="mockup-card mockup-secondary">
        <div class="browser-bar">
          <div class="browser-dots">
            <div class="dot dot-red"></div>
            <div class="dot dot-yellow"></div>
            <div class="dot dot-green"></div>
          </div>
          <div class="browser-url">
            <span>🔒</span> https://cuttingeuropean.com/servicio-tecnico
          </div>
        </div>
        <div class="browser-content">
          <img src="${imgSat}" alt="Servicio Técnico SAT" style="width: 100%; object-fit: cover;">
          <img src="${imgFooter}" alt="Footer Corporativo" style="width: 100%; object-fit: cover;">
        </div>
      </div>

      <!-- Floating Pill Annotation Right -->
      <div class="floating-tag tag-bento-pos">
        <div class="floating-tag-num">02</div>
        <div>
          <strong style="color: #38bdf8;">SAT & Footer Transparente</strong>
          <div style="font-size: 11px; color: #cbd5e1;">Sede Fuenlabrada + Isotipo limpio</div>
        </div>
      </div>
    </div>

    <div class="slide-footer-info">
      <div>Sede Central: C. del Amonio, 2, 28946 Fuenlabrada, Madrid</div>
      <div>Página 1 de 4 · Visión General de Mockup</div>
    </div>
  </div>

  <!-- ==========================================
       SLIDE 2: HERO, NAVEGACIÓN Y CARRUSEL
       ========================================== -->
  <div class="slide">
    <div class="slide-header">
      <div class="brand-tag">
        <span class="brand-tag-dot"></span>
        SECCIÓN 01 · ZONA SUPERIOR
      </div>
      <div class="slide-title-wrap">
        <h1>Cabecera, Navegación & Carrusel Hero</h1>
        <p>Detalle de los elementos del primer impacto visual y experiencia de usuario</p>
      </div>
      <div class="slide-badge">SLIDE 02 / 04</div>
    </div>

    <div class="detail-grid">
      <!-- Mockup Frame with Visual Pins -->
      <div class="detail-mockup-frame">
        <div class="browser-bar">
          <div class="browser-dots">
            <div class="dot dot-red"></div>
            <div class="dot dot-yellow"></div>
            <div class="dot dot-green"></div>
          </div>
          <div class="browser-url">
            <span>🔒</span> https://cuttingeuropean.com/
          </div>
        </div>
        <div class="browser-content" style="position: relative;">
          <img src="${imgHero0}" alt="Hero & Nav Detail" style="width: 100%;">
          
          <!-- Visual Pins positioned over the mockup -->
          <div class="pin" style="top: 55px; left: 105px;">1</div>
          <div class="pin" style="top: 55px; right: 170px;">2</div>
          <div class="pin" style="top: 350px; left: 90px;">3</div>
          <div class="pin" style="top: 350px; right: 240px;">4</div>
        </div>
      </div>

      <!-- Explanations Column -->
      <div class="explanations-list">
        <div class="exp-card">
          <div class="exp-header">
            <div class="exp-num">1</div>
            <div class="exp-title">Logotipo Integrado & Marca</div>
          </div>
          <div class="exp-desc">
            Isotipo circular vectorizado acotado rigurosamente a <strong>32px de altura</strong> con fondo transparente. No rebasa el límite superior ni desborda la barra de navegación, acompañado por tipografía corporativa limpia.
          </div>
          <span class="exp-tag">Ajuste de límites exacto</span>
        </div>

        <div class="exp-card">
          <div class="exp-header">
            <div class="exp-num">2</div>
            <div class="exp-title">Navegación & CTA de Conversión</div>
          </div>
          <div class="exp-desc">
            Menú de accesos directos estructurado: Maquinaria, Ocasión con badge <em>Stock Taller</em>, Servicios y Empresa. Incluye línea telefónica directa y botón de acción prioritario <strong>Pedir Presupuesto</strong>.
          </div>
          <span class="exp-tag">Enfoque de conversión B2B</span>
        </div>

        <div class="exp-card">
          <div class="exp-header">
            <div class="exp-num">3</div>
            <div class="exp-title">Propuesta de Valor & Titular</div>
          </div>
          <div class="exp-desc">
            Titular de alto impacto enfocado a la industria del metal y corte exigente. Badge dinámico de modelo de máquina activa y botones dobles para solicitud o descarga de catálogo.
          </div>
          <span class="exp-tag">Mensaje de autoridad industrial</span>
        </div>

        <div class="exp-card">
          <div class="exp-header">
            <div class="exp-num">4</div>
            <div class="exp-title">Caja Showroom & Transición Suave</div>
          </div>
          <div class="exp-desc">
            Tarjeta flotante blanca en estilo estudio fotográfico. Transición <strong>Soft Dissolve</strong> mediante cross-fade de opacidad pura sin solapamiento vertical ni saltos al cambiar entre las 3 máquinas en modo manual o automático.
          </div>
          <span class="exp-tag">Efecto Fade Suave Verificado</span>
        </div>
      </div>
    </div>

    <div class="slide-footer-info">
      <div>Desarrollado para Cutting European · Maquinaria de Corte para Metal</div>
      <div>Página 2 de 4 · Análisis Cabecera y Hero</div>
    </div>
  </div>

  <!-- ==========================================
       SLIDE 3: BENTO GRID Y MAQUINARIA DE OCASIÓN
       ========================================== -->
  <div class="slide">
    <div class="slide-header">
      <div class="brand-tag">
        <span class="brand-tag-dot"></span>
        SECCIÓN 02 · ZONA MEDIA
      </div>
      <div class="slide-title-wrap">
        <h1>Catálogo Bento Grid & Maquinaria de Ocasión</h1>
        <p>Organización visual modular para facilitar la localización de producto según necesidad de corte</p>
      </div>
      <div class="slide-badge">SLIDE 03 / 04</div>
    </div>

    <div class="detail-grid">
      <!-- Mockup Frame -->
      <div class="detail-mockup-frame">
        <div class="browser-bar">
          <div class="browser-dots">
            <div class="dot dot-red"></div>
            <div class="dot dot-yellow"></div>
            <div class="dot dot-green"></div>
          </div>
          <div class="browser-url">
            <span>🔒</span> https://cuttingeuropean.com/#maquinaria
          </div>
        </div>
        <div class="browser-content" style="position: relative;">
          <img src="${imgBento}" alt="Bento Grid" style="width: 100%;">
          
          <div class="pin" style="top: 80px; left: 340px;">5</div>
          <div class="pin" style="top: 360px; left: 210px;">6</div>
          <div class="pin" style="top: 360px; right: 210px;">7</div>
        </div>
      </div>

      <!-- Explanations Column -->
      <div class="explanations-list">
        <div class="exp-card">
          <div class="exp-header">
            <div class="exp-num">5</div>
            <div class="exp-title">Bento Grid Modular de Maquinaria</div>
          </div>
          <div class="exp-desc">
            Diseño contemporáneo en cuadrícula Bento que distribuye las familias clave: <strong>Sierras de Cinta</strong>, <strong>Sierras de Disco</strong> y <strong>Líneas Automáticas</strong>. Cada celda cuenta con fotografía técnica, capacidades de corte y especificaciones.
          </div>
          <span class="exp-tag">Navegación visual sin saturación</span>
        </div>

        <div class="exp-card">
          <div class="exp-header">
            <div class="exp-num">6</div>
            <div class="exp-title">Maquinaria de Ocasión Garantizada</div>
          </div>
          <div class="exp-desc">
            Módulo destacado para maquinaria revisada y reacondicionada en taller propio. Ofrece entrega inmediata, ahorro de costes y garantía por escrito para talleres y caldererías.
          </div>
          <span class="exp-tag">Stock Taller de Alta Rotación</span>
        </div>

        <div class="exp-card">
          <div class="exp-header">
            <div class="exp-num">7</div>
            <div class="exp-title">Plan Renove & Valoración de Parque</div>
          </div>
          <div class="exp-desc">
            Servicio exclusivo de sustitución de sierras y maquinaria obsoleta por nuevos modelos de alta eficiencia energética, con tasación directa del equipo usado.
          </div>
          <span class="exp-tag">Incentivo a la modernización</span>
        </div>
      </div>
    </div>

    <div class="slide-footer-info">
      <div>Gama MEP y Maquinaria Industrial de Corte</div>
      <div>Página 3 de 4 · Catálogo y Bento Grid</div>
    </div>
  </div>

  <!-- ==========================================
       SLIDE 4: SERVICIO TÉCNICO SAT Y FOOTER
       ========================================== -->
  <div class="slide">
    <div class="slide-header">
      <div class="brand-tag">
        <span class="brand-tag-dot"></span>
        SECCIÓN 03 · SAT & CONTACTO
      </div>
      <div class="slide-title-wrap">
        <h1>Servicio Técnico SAT, Ubicación & Footer</h1>
        <p>Garantía de asistencia oficial, localización física exacta y presencia de marca</p>
      </div>
      <div class="slide-badge">SLIDE 04 / 04</div>
    </div>

    <div class="detail-grid">
      <!-- Mockup Frame -->
      <div class="detail-mockup-frame">
        <div class="browser-bar">
          <div class="browser-dots">
            <div class="dot dot-red"></div>
            <div class="dot dot-yellow"></div>
            <div class="dot dot-green"></div>
          </div>
          <div class="browser-url">
            <span>🔒</span> https://cuttingeuropean.com/contacto
          </div>
        </div>
        <div class="browser-content" style="position: relative;">
          <img src="${imgFooter}" alt="Footer Corporativo" style="width: 100%;">
          
          <div class="pin" style="top: 70px; left: 100px;">8</div>
          <div class="pin" style="top: 220px; left: 70px;">9</div>
          <div class="pin" style="top: 250px; right: 110px;">10</div>
        </div>
      </div>

      <!-- Explanations Column -->
      <div class="explanations-list">
        <div class="exp-card">
          <div class="exp-header">
            <div class="exp-num">8</div>
            <div class="exp-title">Servicio Técnico Oficial SAT</div>
          </div>
          <div class="exp-desc">
            Sección técnica dedicada a la reparación y mantenimiento de sierras de cinta y disco. Asistencia en taller y desplazamientos in-situ con técnicos cualificados y repuestos originales.
          </div>
          <span class="exp-tag">Servicio Postventa Integral</span>
        </div>

        <div class="exp-card">
          <div class="exp-header">
            <div class="exp-num">9</div>
            <div class="exp-title">Logotipo Footer 100% Transparente</div>
          </div>
          <div class="exp-desc">
            Se ha eliminado la antigua caja blanca con fondo rígido. El isotipo circular se renderiza en alfa transparente directamente sobre el fondo negro carbón, consiguiendo un aspecto sobrio y corporativo.
          </div>
          <span class="exp-tag">Sin fondo blanco ni bordes extraños</span>
        </div>

        <div class="exp-card">
          <div class="exp-header">
            <div class="exp-num">10</div>
            <div class="exp-title">Sede Física Verificada en Fuenlabrada</div>
          </div>
          <div class="exp-desc">
            Dirección física exacta integrada en el footer y en la página de contacto: <strong>C. del Amonio, 2, 28946 Fuenlabrada, Madrid</strong>, con enlace directo a Google Maps, horario comercial y canales de consulta.
          </div>
          <span class="exp-tag">Datos Georreferenciados Reales</span>
        </div>
      </div>
    </div>

    <div class="slide-footer-info">
      <div>Cutting European S.L. · C. del Amonio, 2, 28946 Fuenlabrada, Madrid · Tel: 93 849 84 56</div>
      <div>Página 4 de 4 · Asistencia SAT y Pie de Página</div>
    </div>
  </div>

</body>
</html>
`;

async function generatePdf() {
  console.log('Iniciando generación de PDF con Playwright...');
  const browser = await chromium.launch({ headless: true });
  const page = await browser.newPage({
    viewport: { width: 1600, height: 1050 },
    deviceScaleFactor: 2
  });

  await page.setContent(htmlContent, { waitUntil: 'networkidle' });
  // Wait a moment for web fonts to settle
  await page.waitForTimeout(1000);

  const pdfPath = path.join(presentationDir, 'Cutting_European_Mockup_Presentation.pdf');
  await page.pdf({
    path: pdfPath,
    width: '1600px',
    height: '1050px',
    printBackground: true,
    margin: { top: '0', right: '0', bottom: '0', left: '0' }
  });
  console.log(`PDF generado con éxito en: ${pdfPath}`);

  // Take screenshot of each slide for quick preview
  const slides = await page.$$('.slide');
  for (let i = 0; i < slides.length; i++) {
    const slidePath = path.join(presentationDir, `preview_slide_${i + 1}.png`);
    await slides[i].screenshot({ path: slidePath });
    console.log(`Preview slide ${i + 1} guardada en: ${slidePath}`);
  }

  await browser.close();
}

generatePdf().catch(err => {
  console.error('Error generando PDF:', err);
  process.exit(1);
});
