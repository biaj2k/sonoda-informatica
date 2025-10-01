<!doctype html>
<html lang="en">
<head>
    @stack('styles')
    <style>

        :root {
            --bg: #eef7ff;
            --surface: #ffffff;

            --primary-50: #eaf6ff;
            --primary-100: #cde8e5;
            --primary-300: #7ab2b2;
            --primary-500: #4d869c;

            --accent: #6fcf97;
            --text: #334155;
            --muted: #6b7280;
            --border: #e5e7eb;

            --shadow: 0 6px 24px rgba(13,50,77,.08), 0 2px 8px rgba(13,50,77,.06);
            --radius: 18px;
            --nav-h: 72px;
        }

        /* Base */
        * {
            box-sizing: border-box;
        }

        html,
        body {
            height: 100%;
        }

        body {
            margin: 0;
            font-family: Inter, system-ui, -apple-system, Segoe UI, Roboto, Arial, Helvetica, sans-serif;
            color: var(--text);
            background: var(--bg);
            padding-top: var(--nav-h);
            scroll-padding-top: var(--nav-h);
        }

        .container {
            max-width: 1180px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .section {
            padding: 72px 0;
        }

        .section.alt {
            background: var(--surface);
        }

        .section-title {
            font-size: clamp(22px, 3vw, 32px);
            margin: 0 0 10px;
        }

        .section-sub {
            color: var(--muted);
            margin: 0 0 28px;
        }

        h1 {
            letter-spacing: 1px;
        } /* tracking */

        /* =========================
           NAV fixa
           ========================= */
        .nav {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            width: 100%;
            margin: 0;
            z-index: 1000;
            background: rgba(255,255,255,.95);
            backdrop-filter: saturate(120%) blur(8px);
            border-bottom: 1px solid var(--border);
        }

        .nav.scrolled {
            box-shadow: 0 6px 20px rgba(0,0,0,.06);
        }

        .nav-inner {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 16px;
            min-height: var(--nav-h);
        }

        .brand {
            display: flex;
            align-items: center;
            gap: 10px;
            font-weight: 800;
            text-decoration: none;
        }

        .brand span {
            font-size: 1.05rem;
            color: var(--primary-500);
        }

        .nav-links {
            display: flex;
            gap: 18px;
            align-items: center;
        }

        .nav-links a {
            padding: 10px 12px;
            border-radius: 12px;
            text-decoration: none;
            color: var(--text);
            font-weight: 700;
        }

        .nav-links a:hover {
            background: var(--primary-50);
        }

        .burger {
            display: none;
            cursor: pointer;
            border: 1px solid var(--border);
            padding: 8px 10px;
            border-radius: 12px;
            background: var(--surface);
        }

        .burger .burger-bar {
            display: block;
            width: 22px;
            height: 2px;
            background: var(--text);
            margin: 4px 0;
            border-radius: 2px;
        }

        .mobile-link {
            padding: 10px 12px;
            border-radius: 12px;
            text-decoration: none;
            color: var(--text);
            font-weight: 700;
        }

        .mobile-link:hover {
            background: var(--primary-50);
        }

        .mobile-link.cta {
            display: flex;
            gap: 8px;
            align-items: center;
            border: 1px solid var(--primary-300);
        }

        /* =========================
   FOOTER
   ========================= */
        .footer {
            margin-top: 40px;
            border-top: 1px solid var(--border);
            background: var(--surface);
        }

        .footer-flex {
            display: grid;
            grid-template-columns: 1fr auto 1fr;
            gap: 16px;
            align-items: center;
            padding: 18px 0;
        }

        .ft-brand {
            display: flex;
            align-items: center;
            gap: 10px;
            font-weight: 700;
            color: var(--primary-500);
        }

        .ft-social {
            display: flex;
            gap: 12px;
            align-items: center;
            justify-content: center;
        }

        .ft-social a {
            display: inline-flex;
            gap: 8px;
            align-items: center;
            text-decoration: none;
            color: var(--text);
            padding: 8px 10px;
            border-radius: 12px;
        }

        .ft-social a:hover {
            background: var(--primary-50);
        }

        .ft-whatsapp {
            border: 1px solid var(--primary-300);
        }

        .ft-copy {
            text-align: right;
            color: var(--muted);
            font-size: .9rem;
        }




    </style>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Sonoda Informática</title>
    <meta name="description" content="Manutenção de computador, notebook, impressora e nobreak. Venda de hardware: PCs, notebooks, impressoras, periféricos e upgrades." />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css" />
</head>
<body>

<!-- Navbar fixa -->
<header class="nav" role="banner">
    <div class="container nav-inner">
        <a href="#home" class="brand" aria-label="Página inicial Sonoda Informática">
            <img src="../images/sonodainfo-logo.png" alt="Logotipo Sonoda Informática" class="brand-logo" width="260" />
        </a>
        <nav class="nav-links" aria-label="Navegação principal">
            <a href="#servicos">Serviços</a>
            <a href="#hardware">Produtos</a>
            <a href="#sobre">Sobre</a>
            <a href="#faq">FAQ</a>
            <a href="#contato">Contato</a>
            <a href="https://maps.app.goo.gl/dTATYm74Ez36B6j69" target="_blank" rel="noopener">Localização</a>
        </nav>
        <button class="burger" aria-label="Abrir menu" aria-expanded="false" aria-controls="sidebarNav">
            <span class="burger-bar"></span><span class="burger-bar"></span><span class="burger-bar"></span>
        </button>
    </div>

    <div id="sidebarNav" class="sidebar" aria-hidden="true">
        <div class="sidebar-header">
            <span class="sidebar-title">Menu</span>
            <button class="sidebar-close" aria-label="Fechar menu">&times;</button>
        </div>
        <nav class="sidebar-links" aria-label="Navegação móvel">
            <a href="#servicos" class="side-link">Serviços</a>
            <a href="#hardware" class="side-link">Produtos</a>
            <a href="#sobre" class="side-link">Sobre</a>
            <a href="#faq" class="side-link">FAQ</a>
            <a href="#contato" class="side-link">Contato</a>
            <a href="https://maps.app.goo.gl/dTATYm74Ez36B6j69" target="_blank" rel="noopener" class="side-link">Localização</a>
            <a class="side-link cta" href="https://wa.me/551532725929?text=Olá%20Sonoda!%20Preciso%20de%20assistência%20técnica." target="_blank" rel="noopener">
                <img src="../icons/whatsapp.svg" alt="" class="wa-ico" aria-hidden="true" /> Falar no WhatsApp
            </a>
        </nav>
    </div>
    <div id="backdrop" class="backdrop" hidden></div>

</header>

@yield('inicial')

<footer class="footer">
    <div class="container footer-flex">
        <div class="ft-brand">
            <img src="../images/sonodainfo-logo.png" alt="Sonoda Informática" width="275"  loading="lazy" />
        </div>
        <div class="ft-social" aria-label="Redes sociais">
            <a href="https://www.instagram.com/sonodainformatica/" aria-label="Instagram"><img src="../icons/instagram.svg" width="30" height="30" alt="" aria-hidden="true" /></a>
            <a href="https://pt-br.facebook.com/sonodainformatica" aria-label="Facebook"><img src="../icons/facebook.svg" width="30" height="30" alt="" aria-hidden="true" /></a>
            <a class="ft-whatsapp" href="https://wa.me/551532725929" target="_blank" rel="noopener"><img src="../icons/whatsapp.svg" width="30" height="30" alt="" aria-hidden="true" /> WhatsApp</a>
        </div>
        <div class="ft-copy">© 2025 Sonoda Informática LTDA - CNPJ: 00.824.398/0001-80. Todos os direitos reservados.</div>
    </div>
</footer>

@stack('scripts')
<script>

</script>

</body>
</html>
