<?php
// Opcional: incluir conexión si requieres datos de la BD en el futuro
// include 'conexion.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nercovalch | Soluciones de Ingeniería y Software</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <!-- Header / Portada Principal con Logo -->
    <header class="main-header">
        <div class="container header-content">
            <img src="logo.png" alt="Logo Ner Covalch" class="logo-img">
            <div class="header-text">
                <h1>Modulos y Herramientas Nercovalch</h1>
                <p class="subtitle">Soluciones de Ingeniería Civil, Desarrollo de Software y Sistemas Modulares</p>
            </div>
        </div>
    </header>

    <!-- Sección de Módulos (Portafolio y Herramientas) -->
    <main class="container">
        <section class="intro-section">
            <h2>Módulos y Herramientas Disponibles</h2>
            <p>Plataforma profesional diseñada para ingenieros, estudiantes y usuarios que buscan cálculos precisos, automatización y herramientas de software aplicadas.</p>
        </section>

        <div class="modules-grid">
            
            <!-- MÓDULO 1: Semaforización Vial (ACTIVO) -->
            <div class="module-card">
                <div class="card-header">
                    <h3>Módulo de Semaforización Vial</h3>
                    <span class="status-badge active">Activo</span>
                </div>
                <div class="card-body">
                    <div class="card-image-container">
                        <img src="sistema_semaforo/assets/caratula.jpg" alt="Carátula Módulo de Semaforización" onerror="this.src='https://images.unsplash.com/photo-1544620347-c4fd4a3d5957?auto=format&fit=crop&w=600&q=80'">
                    </div>
                    <p><strong>Qué contiene:</strong> Algoritmos de cálculo de ciclos (fórmula de Webster), análisis de capacidad vial y validación de soportes estructurales.</p>
                    <p><strong>Resultados del informe:</strong> Tiempos óptimos de verde, rojo, fases de tráfico y reportes técnicos listos para proyectos viales.</p>
                </div>
                <div class="card-footer">
                      <a href="https://semaforo.nercovalch.uk" class="btn-primary" target="_blank">Acceder al Módulo</a>
                </div>
            </div>

            <!-- MÓDULO 2: Módulo de Audiolibros / Libros (ACTIVO) -->
            <div class="module-card">
                <div class="card-header">
                    <h3>Módulo de Audiolibros / Libros</h3>
                    <span class="status-badge active">Activo</span>
                </div>
                <div class="card-body">
                    <div class="card-image-container">
                        <img src="img/caratula_audiolibro.jpg" alt="Carátula Audiolibros" onerror="this.src='https://images.unsplash.com/photo-1532012197267-da84d127e765?auto=format&fit=crop&w=600&q=80'">
                    </div>
                    <p><strong>Qué contiene:</strong> Reproductor interactivo, índices de contenido digital y gestión de capítulos para material educativo y técnico.</p>
                    <p><strong>Resultados del informe:</strong> Experiencia de lectura fluida, control de progreso de usuario y acceso multiplataforma.</p>
                </div>
                <div class="card-footer">
                    <a href="https://audiolibro-english.nercovalch.uk" target="_blank" class="btn-primary">Acceder al Módulo</a>
                </div>
            </div>

            <!-- MÓDULO 3: Evaluación de Cerca Perimetral (ACTIVO) -->
            <div class="module-card">
                <div class="card-header">
                    <h3>Evaluación Cerca Perimetral</h3>
                    <span class="status-badge active">Activo</span>
                </div>
                <div class="card-body">
                    <div class="card-image-container" style="background: linear-gradient(135deg, #2c3e50, #3498db); display: flex; align-items: center; justify-content: center; height: 160px; color: white; border-radius: 8px; margin-bottom: 15px;">
                        <div style="text-align: center;">
                            <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="margin-bottom: 8px;"><path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path></svg>
                            <span style="display: block; font-weight: bold; font-size: 15px;">Cerca Perimetral</span>
                        </div>
                    </div>
                    <p><strong>Qué contiene:</strong> Análisis estructural de estabilidad, diseño de soportes y evaluación de esfuerzos según normativas vigentes.</p>
                    <p><strong>Resultados del informe:</strong> Cómputos métricos exactos de excavación, concreto, paredes, friso y certificación técnica en PDF.</p>
                </div>
                <div class="card-footer">
                    <div class="card-footer">
                     <a href="https://nercovalch.uk/cerca-perimetral/valuacion" target="_blank" class="btn-primary">Acceder al Módulo</a>
                    </div>
                </div>
            </div>

            <!-- MÓDULO 4: Sala Sanitaria / ValuaBaño (ACTIVO) -->
            <div class="module-card">
                <div class="card-header">
                    <h3>Diseño de Sala Sanitaria (ValuaBaño)</h3>
                    <span class="status-badge active">Activo</span>
                </div>
                <div class="card-body">
                    <div class="card-image-container">
                        <img src="img/caratula_sanitaria.jpg" alt="Sala Sanitaria" onerror="this.src='https://images.unsplash.com/photo-1584622650111-993a426fbf0a?auto=format&fit=crop&w=600&q=80'">
                    </div>
                    <p><strong>Qué contiene:</strong> Ingeniería de instalaciones hidráulicas, dimensionamiento de área y cálculo de piezas sanitarias.</p>
                    <p><strong>Resultados del informe:</strong> Cómputos e insumos detallados según la normativa correspondiente.</p>
                </div>
                <div class="card-footer">
                    <a href="https://nercovalch.uk/sala-sanitaria" target="_blank" class="btn-primary">Acceder al Módulo</a>
                </div>
            </div>

            <!-- MÓDULO 5: Análisis Biométrico NVR IMC (ACTIVO) -->
            <div class="module-card">
                <div class="card-header">
                    <h3>Análisis Biométrico (NVR IMC)</h3>
                    <span class="status-badge active">Activo</span>
                </div>
                <div class="card-body">
                    <div class="card-image-container">
                        <img src="img/caratula_imc.jpg" alt="Cálculo IMC" onerror="this.src='https://images.unsplash.com/photo-1517838277536-f5f99be501cd?auto=format&fit=crop&w=600&q=80'">
                    </div>
                    <p><strong>Qué contiene:</strong> Índice de masa corporal, porcentajes de grasa estimados y seguimiento de métricas de bienestar.</p>
                    <p><strong>Resultados del informe:</strong> Diagnóstico personalizado, tablas de referencia de peso y recomendaciones de actividad.</p>
                </div>
                <div class="card-footer">
                    <a href="https://nercovalch.uk/nvr_imc/" target="_blank" class="btn-primary">Acceder al Módulo</a>
                </div>
            </div>

            <!-- MÓDULO 6: NVR Exchange (ACTIVO) -->
            <div class="module-card">
                <div class="card-header">
                    <h3>Sistema NVR Exchange</h3>
                    <span class="status-badge active">Activo</span>
                </div>
                <div class="card-body">
                    <div class="card-image-container">
                        <img src="img/caratula_exchange.jpg" alt="Exchange" onerror="this.src='https://images.unsplash.com/photo-1621416894569-0f39ed31d247?auto=format&fit=crop&w=600&q=80'">
                    </div>
                    <p><strong>Qué contiene:</strong> Tasas de cambio actualizadas, registro de transacciones, control de saldos y pasarela de intercambio de activos.</p>
                    <p><strong>Resultados del informe:</strong> Comprobantes digitales, reportes de operaciones diarias y balances financieros.</p>
                </div>
                <div class="card-footer">
                    <a href="https://nercovalch.uk/nvr_exchange/" target="_blank" class="btn-primary">Acceder al Módulo</a>
                </div>
            </div>

            <!-- MÓDULO 7: Software de Impermeabilización (ACTIVO) -->
            <div class="module-card">
                <div class="card-header">
                    <h3>Software de Impermeabilización</h3>
                    <span class="status-badge active">Activo</span>
                </div>
                <div class="card-body">
                    <div class="card-image-container">
                        <img src="img/caratula_impermeabilizacion.jpg" alt="Carátula Impermeabilización" onerror="this.src='https://images.unsplash.com/photo-1504307651254-35680f356dfd?auto=format&fit=crop&w=600&q=80'">
                    </div>
                    <p><strong>Qué contiene:</strong> Gestión en PHP y bases de datos para estimaciones técnicas de capas, costos y materiales de obra.</p>
                    <p><strong>Resultados del informe:</strong> Presupuestos detallados, cómputos métricos y guías de ejecución en campo.</p>
                </div>
                <div class="card-footer">
    <a href="https://nercovalch.uk/evaluacion-imper/" target="_blank" class="btn-primary">Acceder al Módulo</a>
        </div>
            </div>
        
<!-- MÓDULO 8: Sistema Académico (ACTIVO) -->
<div class="module-card">
    <div class="card-header">
        <h3>Sistema Académico</h3>
        <span class="status-badge active">Activo</span>
    </div>
    <div class="card-body">
        <div class="card-image-container" style="background: linear-gradient(135deg, #10b981, #059669);">
            <div style="text-align: center;">
                <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 19.5v-15A2.5 2.5 0 0 1 6.5 2H20v20H6.5a2.5 2.5 0 0 1-2.5-2.5Z"/></svg>
                <span style="display: block; font-weight: bold; font-size: 15px; color: white;">Sistema Académico</span>
            </div>
        </div>
        <p><strong>Qué contiene:</strong> Control de estudiantes, profesores, asignación de materias, calificaciones y generación de reportes académicos.</p>
        <p><strong>Resultados del informe:</strong> Paneles de administración seguros, gestión de notas por períodos y listados oficiales actualizados en tiempo real.</p>
    </div>
    <div class="card-footer">
        <a href="https://sistema-academico.nercovalch.uk" target="_blank" class="btn-primary">Acceder al Módulo</a>
    </div>
</div>
<!-- MÓDULO 9: Sistema de Gestión de Almacén y Materiales - Tesis (ACTIVO) -->
<div class="module-card">
    <div class="card-header">
        <h3>Gestión de Almacén (Tesis)</h3>
        <span class="status-badge active">Activo</span>
    </div>
    <div class="card-body">
        <div class="card-image-container" style="background: linear-gradient(135deg, #3b82f6, #1d4ed8);">
            <div style="text-align: center;">
                <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"/></svg>
                <span style="display: block; font-weight: bold; font-size: 15px; color: white;">Proyecto de Tesis</span>
            </div>
        </div>
        <p><strong>Qué contiene:</strong> Control de inventario, entradas, salidas y gestión de materiales con validación de usuarios y base de datos.</p>
        <p><strong>Resultados del informe:</strong> Trazabilidad completa de insumos, reportes automatizados y control de accesos seguros por roles.</p>
    </div>
    <div class="card-footer">
        <a href="https://tesis.nercovalch.uk" target="_blank" class="btn-primary">Acceder al Módulo</a>
    </div>
</div>

            <!-- MÓDULO 10: Sistema de Gestión Escolar / Colegio (EN DESARROLLO) -->
            <div class="module-card">
                <div class="card-header">
                    <h3>Sistema de Gestión Escolar</h3>
                    <span class="status-badge pending">En Desarrollo</span>
                </div>
                <div class="card-body">
                    <div class="card-image-container">
                        <img src="img/caratula_colegio.jpg" alt="Carátula Sistema Escolar" onerror="this.src='https://images.unsplash.com/photo-1580582932707-520aed937b7b?auto=format&fit=crop&w=600&q=80'">
                    </div>
                    <p><strong>Qué contiene:</strong> Control académico, administración de matrículas, asistencia y perfiles diferenciados para profesores y estudiantes.</p>
                    <p><strong>Resultados del informe:</strong> Boletines automatizados, reportes de rendimiento y control financiero institucional.</p>
                </div>
                <div class="card-footer">
                    <span class="btn-disabled">Próximamente</span>
                </div>
            </div>

        </div>
    </main>

    <!-- Footer con Nota Legal y Aviso Comercial -->
    <footer class="main-header footer-bottom">
        <div class="container footer-content-custom">
            <p class="footer-legal">
                <strong>Nota Legal y Descargo de Responsabilidad:</strong> Este sitio web y los sistemas modulares aquí presentados operan estrictamente como un portafolio de desarrollo de software y demostración de ingeniería. Las aplicaciones y simuladores expuestos se muestran con fines informativos y técnicos, y no constituyen la operación directa de una institución financiera, casa de cambio comercial ni entidad educativa oficial. La autora ofrece servicios profesionales de ingeniería civil e informática para el diseño y desarrollo de sistemas a medida para terceros interesados.
            </p>
            <p>&copy; 2026 Desarrollado por Ing. Civil e Informático Nerbelis Valdeblanques / Propiedad de Nercovalch. Todos los derechos reservados.</p>
        </div>
    </footer>

</body>
</html>