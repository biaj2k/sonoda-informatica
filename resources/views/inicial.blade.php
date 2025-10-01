@extends('layout')

@push('styles')
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
        /* =========================
   HERO
   ========================= */

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


        .hero {
            padding: 56px 0 32px;
        }

        .hero-grid {
            display: grid;
            grid-template-columns: 1.2fr .8fr;
            gap: 28px;
            align-items: center;
        }

        .hero-text h1 {
            font-size: clamp(26px, 4vw, 40px);
            line-height: 1.1;
            margin: 0 0 12px;
        }

        .hero-text p {
            font-size: clamp(15px, 2.2vw, 18px);
            color: var(--muted);
        }

        .hero-cta {
            display: flex;
            gap: 12px;
            margin: 18px 0 10px;
            flex-wrap: wrap;
        }

        .btn {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            padding: 12px 16px;
            border-radius: 14px;
            text-decoration: none;
            font-weight: 800;
            transition: transform .06s ease, box-shadow .2s ease;
            box-shadow: var(--shadow);
        }

        .btn:hover {
            transform: translateY(-1px);
        }

        .btn:active {
            transform: translateY(0);
        }

        .btn-primary {
            background: var(--primary-500);
            color: #fff;
        }

        .btn-ghost {
            background: var(--surface);
            color: var(--text);
            border: 1px solid var(--border);
        }

        .btn-primary:hover {
            background: #086a91;
        }

        .btn-lg {
            padding: 14px 18px;
            font-size: 1.05rem;
        }

        .wa-ico {
            width: 18px;
            height: 18px;
        }

        .badges {
            display: flex;
            gap: 12px;
            list-style: none;
            padding: 0;
            margin: 14px 0 0;
            flex-wrap: wrap;
        }

        .badges li {
            background: var(--surface);
            border: 1px solid var(--border);
            padding: 8px 12px;
            border-radius: 999px;
            color: var(--muted);
        }

        .hero-art img {
            max-width: 100%;
            height: auto;
            filter: drop-shadow(0 10px 24px rgba(0,0,0,.08));
        }

        /* garantir botões de carrossel clicáveis sobre tudo */
        .car-btn {
            z-index: 6;
            pointer-events: auto;
        }

        /* =========================
           CARDS (serviços)
           ========================= */
        .grid-cards {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 18px;
        }

        .card {
            background: var(--surface);
            border: 1px solid var(--border);
            border-radius: var(--radius);
            padding: 18px;
            box-shadow: var(--shadow);
            transition: transform .12s ease, box-shadow .2s ease;
        }

        .card:hover {
            transform: translateY(-3px);
        }

        .card h3 {
            margin: 10px 0 8px;
            font-size: 1.05rem;
        }

        .card p {
            color: var(--muted);
            margin: 0;
        }

        .card-svg {
            width: 48px;
            height: 48px;
            display: block;
            margin-bottom: 8px;
        }

        /* imagem do toner com máscara */
        .img-toner {
            width: 500px;
            -webkit-mask-image: linear-gradient(to left, transparent 0%, rgba(0,0,0,0.7) 10%, black 90%);
            -webkit-mask-repeat: no-repeat;
            -webkit-mask-size: cover;
        }

        /* =========================
           SOBRE
           ========================= */
        .about-flex {
            display: grid;
            grid-template-columns: 1.1fr .9fr;
            gap: 24px;
            align-items: center;
        }

        .list-check {
            list-style: none;
            padding: 0;
            margin: 10px 0 0;
            display: grid;
            gap: 8px;
        }

        .list-check li {
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .list-check img {
            width: 18px;
            height: 18px;
            filter: invert(39%) sepia(98%) saturate(479%) hue-rotate(85deg) brightness(92%) contrast(91%);
        }

        .about-art img {
            max-width: 100%;
            height: auto;
        }

        /* =========================
           CONTATO
           ========================= */
        .contact-card {
            display: grid;
            grid-template-columns: 1.2fr .8fr;
            gap: 22px;
            align-items: center;
            background: var(--surface);
            border: 1px solid var(--border);
            border-radius: var(--radius);
            padding: 24px;
            box-shadow: var(--shadow);
        }

        .contact-right {
            list-style: none;
            margin: 0;
            padding: 0;
            display: grid;
            gap: 10px;
        }

        .contact-right a {
            color: var(--primary-500);
            text-decoration: none;
            border-bottom: 1px dashed transparent;
        }

        .contact-right a:hover {
            border-bottom-color: var(--primary-500);
        }

        /* =========================
           STATS
           ========================= */
        .stats-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 16px;
            margin-top: 6px;
        }

        .stat {
            background: var(--surface);
            border: 1px solid var(--border);
            border-radius: var(--radius);
            padding: 18px;
            box-shadow: var(--shadow);
            text-align: center;
        }

        .stat-ico {
            font-size: 26px;
        }

        .stat-val {
            font-size: clamp(22px, 4vw, 36px);
            font-weight: 800;
            letter-spacing: .5px;
            color: var(--text);
        }

        .stat-val .thin {
            font-weight: 600;
            color: var(--muted);
        }

        .stat-sub {
            color: var(--muted);
        }

        /* =========================
           CAROUSEL (genérico)
           ========================= */
        .carousel {
            position: relative;
            margin-top: 8px;
        }

        .car-viewport {
            overflow: hidden;
            border: 1px solid var(--border);
            border-radius: var(--radius);
            background: var(--surface);
            box-shadow: var(--shadow);
        }

        .car-track {
            display: flex;
            transition: transform .4s ease;
        }

        .car-item {
            min-width: 100%;
            padding: 20px 20px 28px;
            display: grid;
            place-items: center;
            text-align: center;
        }

        .car-item img {
            max-width: 520px;
            width: 100%;
            height: auto;
            filter: drop-shadow(0 10px 24px rgba(0,0,0,.06));
        }

        .car-item h3 {
            margin: 12px 0 0;
        }

        .car-btn {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            border: 1px solid var(--border);
            background: var(--surface);
            border-radius: 12px;
            padding: 8px 12px;
            cursor: pointer;
            box-shadow: var(--shadow);
        }

        .car-btn:hover {
            background: var(--primary-50);
        }

        .car-btn.prev {
            left: 6px;
        }

        .car-btn.next {
            right: 6px;
        }

        .car-dots {
            display: flex;
            gap: 8px;
            justify-content: center;
            margin-top: 10px;
        }

        .car-dots button {
            width: 10px;
            height: 10px;
            border-radius: 50%;
            border: 1px solid var(--primary-300);
            background: transparent;
            cursor: pointer;
        }

        .car-dots button.active {
            background: var(--primary-300);
        }

        /* Duo variant */
        .car-duo {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 16px;
            max-width: 1100px;
            width: 100%;
            margin: 8px auto 0;
        }

        .car-duo img {
            max-width: 100%;
            height: auto;
        }

        .car-duo .carousel {
            width: 100%;
        }

        .car-duo .car-viewport {
            overflow: hidden;
        }

        .carousel.small .car-item img {
            max-width: 360px;
        }

        /* =========================
           TESTIMONIALS
           ========================= */
        .testimonials-grid {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 18px;
        }

        .testimonial {
            background: var(--surface);
            border: 1px solid var(--border);
            border-radius: var(--radius);
            padding: 18px;
            box-shadow: var(--shadow);
        }

        .testimonial blockquote {
            margin: 0 0 10px;
            font-size: 1rem;
            line-height: 1.5;
        }

        .testimonial figcaption {
            color: var(--muted);
            font-size: .95rem;
        }

        /* =========================
   Sidebar (mobile)
   ========================= */
        .sidebar {
            position: fixed;
            top: 0;
            left: 0;
            bottom:;
            width: 78vw;
            max-width: 320px;
            background: var(--surface);
            border-radius: 0 10px 10px 0;
            border-right: 1px solid var(--border);
            box-shadow: var(--shadow);
            transform: translateX(-100%);
            transition: transform .28s ease;
            z-index: 1200;
            display: flex;
            flex-direction: column;
        }

        .sidebar.open {
            transform: translateX(0);
        }

        .sidebar-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 14px 16px;
            border-bottom: 1px solid var(--border);
        }

        .sidebar-title {
            font-weight: 800;
            color: var(--primary-500);
        }

        .sidebar-close {
            border: none;
            background: transparent;
            font-size: 28px;
            line-height: 1;
            cursor: pointer;
            padding: 4px 8px;
        }

        .sidebar-links {
            display: flex;
            flex-direction: column;
            padding: 10px;
        }

        .side-link {
            padding: 12px 12px;
            border-radius: 12px;
            text-decoration: none;
            color: var(--text);
            font-weight: 700;
        }

        .side-link:hover {
            background: var(--primary-50);
        }

        .side-link.cta {
            display: flex;
            gap: 8px;
            align-items: center;
            border: 1px solid var(--primary-300);
            margin-top: 6px;
        }

        .backdrop {
            position: fixed;
            inset: 0;
            background: rgba(15,23,42,.35);
            backdrop-filter: blur(2px);
            z-index: 1100;
        }

        .backdrop[hidden] {
            display: none;
        }

        /* =========================
           FAQ
           ========================= */
        .faq .section-title {
            margin-bottom: 8px;
        }

        .faq .section-sub {
            margin-bottom: 18px;
        }

        .faq-list {
            display: grid;
            gap: 12px;
        }

        .faq-item {
            border: 1px solid var(--border);
            border-radius: var(--radius);
            background: var(--surface);
            box-shadow: var(--shadow);
            overflow: clip;
        }

        .faq-summary {
            list-style: none;
            cursor: pointer;
            padding: 16px 18px;
            font-weight: 700;
            display: grid;
            grid-template-columns: 1fr auto;
            align-items: center;
            gap: 10px;
        }

        .faq-summary::-webkit-details-marker {
            display: none;
        }

        .faq-summary:focus-visible {
            outline: 2px solid var(--primary-300);
            outline-offset: 2px;
        }

        .faq-icon {
            width: 18px;
            height: 18px;
            position: relative;
            flex: 0 0 18px;
        }

        /* ícone “+” / “–” animado */
        .faq-icon::before,
        .faq-icon::after {
            content: "";
            position: absolute;
            inset: 0;
            margin: auto;
            background: var(--text);
            transition: transform .2s ease, opacity .2s ease;
        }

        .faq-icon::before {
            width: 14px;
            height: 2px;
        }

        .faq-icon::after {
            width: 2px;
            height: 14px;
        }

        /* estado aberto: vira “–” */
        .faq-item[open] .faq-icon::after {
            transform: scaleY(0);
            opacity: 0;
        }

        .faq-content {
            padding: 0 18px 16px;
            color: var(--muted);
            line-height: 1.6;
        }

        .faq-content p {
            margin: 0;
        }

        /* <= 1000px */
        @media (max-width: 1000px) {
            /* Grids principais */
            .hero-grid {
                grid-template-columns: 1fr;
            }

            .grid-cards {
                grid-template-columns: repeat(2, 1fr);
            }

            .about-flex,
            .contact-card {
                grid-template-columns: 1fr;
            }

            .stats-grid {
                grid-template-columns: 1fr;
            }

            /* Car-duo e depoimentos */
            .car-duo {
                grid-template-columns: repeat(1, minmax(0, 1fr));
            }

            .testimonials-grid {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }
        }

        /* <= 900px */
        @media (max-width: 900px) {
            .nav-links {
                display: none;
            }

            .burger {
                display: block;
            }
        }

        /* <= 640px */
        @media (max-width: 640px) {
            .testimonials-grid {
                grid-template-columns: 1fr;
            }

            .testimonial {
                padding: 16px;
            }

            .testimonial blockquote {
                font-size: 0.98rem;
            }

            .ft-brand {
                justify-content: center;
            }

            .btn-center {
                display: flex;
                justify-content: center;
                margin: 20px 0;
            }
        }

        /* <= 560px */
        @media (max-width: 560px) {
            .grid-cards {
                grid-template-columns: 1fr;
            }

            .footer-flex {
                grid-template-columns: 1fr;
                text-align: center;
            }

            .ft-copy {
                text-align: center;
            }

            .section {
                padding: 56px 0;
            }

            .btn {
                padding: 11px 14px;
            }
        }


    </style>
@endpush

@section('inicial')

    <main id="home">
        <!-- Hero -->
        <section class="hero">
            <div class="container hero-grid">
                <div class="hero-text">
                    <h1>Assistência que resolve, tecnologia que transforma.</h1>
                    <p>Manutenção de <strong>computadores</strong>, <strong>notebooks</strong>, <strong>impressoras</strong> e <strong>nobreaks</strong>. MONTAGEM e UPGRADES.</p>
                    <div class="hero-cta">
                        <a class="btn btn-primary" href="https://wa.me/551532725929?text=Olá%20Sonoda!%20Quero%20um%20orçamento.">
                            <img src="../icons/whatsapp.svg" alt="" class="wa-ico" aria-hidden="true" /> Falar no WhatsApp
                        </a>
                    </div>
                    <ul class="badges">
                        <li>Diagnóstico ágil</li>
                        <li>Garantia em serviço</li>
                        <li>Retirada e entrega*</li>
                    </ul>
                </div>
                <div class="hero-art">
                    <img src="../icons/hero-repair.svg" alt="Ilustração de técnico realizando manutenção" width="520" height="360" />
                </div>
            </div>
        </section>

        <!-- Serviços -->
        <section id="servicos" class="section">
            <div class="container">
                <h2 class="section-title">Serviços executados</h2>
                <p class="section-sub">Manutenção de computadores, notebooks, impressoras e nobreaks.</p>
                <div class="grid-cards">
                    <article class="card">
                        <img class="card-svg" src="../icons/svc-pc.svg" alt="Manutenção de computador desktop" width="48" height="48" />
                        <h3>Manutenção de Computador</h3>
                        <p>Formatação, upgrade, troca de HD/SSD, limpeza e remoção de malware.</p>
                    </article>
                    <article class="card">
                        <img class="card-svg" src="../icons/svc-notebook.svg" alt="Manutenção de notebook" width="48" height="48" />
                        <h3>Manutenção de Notebook</h3>
                        <p>Troca de tela/teclado/bateria, limpeza de cooler e pasta térmica.</p>
                    </article>
                    <article class="card">
                        <img class="card-svg" src="../icons/svc-printer.svg" alt="Conserto de impressoras" width="48" height="48" />
                        <h3>Impressoras</h3>
                        <p>Correção de atolamentos, limpeza e manutenção preventiva.</p>
                    </article>
                    <article class="card">
                        <img class="card-svg" src="../icons/svc-nobreak.svg" alt="Manutenção de nobreak" width="48" height="48" />
                        <h3>Nobreak</h3>
                        <p>Troca de baterias, calibração e verificação eletrônica.</p>
                    </article>
                </div>
            </div>
        </section>

        <!-- Produtos -->
        <section id="hardware" class="section alt hardware">
            <div class="container">
                <div class="hardware-head">
                    <h2>Venda de hardware de informática</h2>
                    <p class="section-sub">Trabalhamos com desktops, notebooks, impressoras, nobreaks e periféricos: teclado, mouse, SSD, memórias, monitores e acessórios.</p>
                </div>

                <div class="car-duo">
                    <div class="carousel small" aria-label="Computadores e Notebooks">
                        <button class="car-btn prev" aria-label="Item anterior">&#10094;</button>
                        <div class="car-viewport"><div class="car-track">
                                <div class="car-item"><img src="../icons/prod-pc.svg" alt="Computadores e desktops" /><h3>Computadores</h3></div>
                                <div class="car-item"><img src="../icons/prod-notebook.svg" alt="Notebooks e ultrabooks" /><h3>Notebooks</h3></div>
                                <div class="car-item"><img src="../icons/prod-pc.svg" alt="Computadores e desktops" /><h3>Computadores</h3></div>
                                <div class="car-item"><img src="../icons/prod-notebook.svg" alt="Notebooks e ultrabooks" /><h3>Notebooks</h3></div>
                                <div class="car-item"><img src="../icons/prod-pc.svg" alt="Computadores e desktops" /><h3>Computadores</h3></div>
                                <div class="car-item"><img src="../icons/prod-notebook.svg" alt="Notebooks e ultrabooks" /><h3>Notebooks</h3></div>
                            </div></div>
                        <button class="car-btn next" aria-label="Próximo item">&#10095;</button>
                        <div class="car-dots" role="tablist" aria-label="Seleção de slide"></div>
                    </div>

                    <div class="carousel small" aria-label="Impressoras e Nobreaks">
                        <button class="car-btn prev" aria-label="Item anterior">&#10094;</button>
                        <div class="car-viewport"><div class="car-track">
                                <div class="car-item"><img src="../icons/prod-printer.svg" alt="Impressoras" /><h3>Impressoras</h3></div>
                                <div class="car-item"><img src="../icons/prod-nobreak.svg" alt="Nobreaks" /><h3>Nobreaks</h3></div>
                                <div class="car-item"><img src="../icons/prod-printer.svg" alt="Impressoras" /><h3>Impressoras</h3></div>
                                <div class="car-item"><img src="../icons/prod-nobreak.svg" alt="Nobreaks" /><h3>Nobreaks</h3></div>
                                <div class="car-item"><img src="../icons/prod-printer.svg" alt="Impressoras" /><h3>Impressoras</h3></div>
                                <div class="car-item"><img src="../icons/prod-nobreak.svg" alt="Nobreaks" /><h3>Nobreaks</h3></div>
                            </div></div>
                        <button class="car-btn next" aria-label="Próximo item">&#10095;</button>
                        <div class="car-dots" role="tablist" aria-label="Seleção de slide"></div>
                    </div>
                </div>
            </div>
        </section>

        <section id="toner" class="section alt">
            <div class="container about-flex">
                <div class="about-text">
                    <h2>Entrega de Toner</h2>
                    <p>Sempre pensando em oferecer as melhores soluções, trazemos mais uma delas:
                        <strong>toner de impressora</strong> diretamente na sua casa ou no seu comércio!
                    </p>
                    <div class="btn-center">
                        <a class="btn btn-primary btn-lg" href="https://wa.me/551532725929?text=Olá%20Sonoda!%20Preciso%20de%20assistência%20técnica.">
                            <img src="../icons/whatsapp.svg" alt="" class="wa-ico" aria-hidden="true" /> FAÇA SEU PEDIDO PELO WHATS AGORA!
                        </a>
                    </div>
                </div>
                <div class="about-art">
                    <img src="../images/toner.png" class="img-toner" alt="Entrega de toner de impressora" width="500" height="300" loading="lazy" />
                </div>
            </div>
        </section>

        <!-- Atendimentos (nossos números) -->
        <section id="atendimentos" class="section">
            <div class="container">
                <h2 class="section-title">Atendimentos</h2>
                <p class="section-sub">Volume de clientes e chamados finalizados.</p>
                <div class="stats-grid">
                    <div class="stat"><div class="stat-ico">👥</div><div class="stat-val">17<span class="thin">.000+</span></div><div class="stat-sub">clientes atendidos</div></div>
                    <div class="stat"><div class="stat-ico">🧰</div><div class="stat-val">25<span class="thin">.000+</span></div><div class="stat-sub">atendimentos realizados</div></div>
                    <div class="stat"><div class="stat-ico">⏱️</div><div class="stat-val">24h</div><div class="stat-sub">média de diagnóstico</div></div>
                </div>
            </div>
        </section>

        <!-- Depoimentos -->
        <section id="depoimentos" class="section testimonials">
            <div class="container">
                <h2 class="section-title">Depoimentos</h2>
                <p class="section-sub">O que nossos clientes dizem.</p>
                <div class="testimonials-grid">
                    <figure class="testimonial"><blockquote>“Atendimento rápido e transparente. Meu notebook voltou voando!”</blockquote><figcaption>— Juliana M.</figcaption></figure>
                    <figure class="testimonial"><blockquote>“Diagnóstico em menos de 24h e entrega no prazo. Recomendo.”</blockquote><figcaption>— Ricardo T., Escritório contábil</figcaption></figure>
                    <figure class="testimonial"><blockquote>“Upgrade de SSD e memória. Equipe atenciosa e preço justo.”</blockquote><figcaption>— Fernanda A., Professora</figcaption></figure>
                </div>
            </div>
        </section>

        <!-- Sobre (deve vir depois de Hardware) -->
        <section id="sobre" class="section alt">
            <div class="container about-flex">
                <div class="about-text">
                    <h2>Sobre a Sonoda Informática</h2>
                    <p>A Sonoda Informática nasceu do sonho de Eduardo Sonoda, que desde jovem atua na área de tecnologia e chegou a morar e trabalhar no Japão. De volta ao Brasil, fundou a Game On, tornando-se referência regional. Com o tempo, nossas atividades evoluíram além do aluguel de jogos e reparos em videogames, e adotamos o nome atual: Sonoda Informática. Desde 1994, em Itapetininga, estamos presentes no dia a dia de empresas e famílias, oferecendo soluções completas em tecnologia.</p>
                    <ul class="list-check">
                        <li><img src="../icons/check-square-fill.svg" alt="" aria-hidden="true">Atendimento em Itapetininga e região</li>
                        <li><img src="../icons/check-square-fill.svg" alt="" aria-hidden="true">Garantia Sonoda</li>
                        <li><img src="../icons/check-square-fill.svg" alt="" aria-hidden="true">Laboratório próprio</li>
                    </ul>
                </div>
                <div class="about-art">
                    <img src="../icons/about-tools.svg" alt="Ferramentas de manutenção" width="520" height="360" />
                </div>
            </div>
        </section>

        <!-- FAQ -->
        <section id="faq" class="section alt faq">
            <div class="container">
                <h2 class="section-title">Perguntas frequentes</h2>
                <p class="section-sub">Dúvidas comuns sobre manutenção e atendimento.</p>

                <div class="faq-list" itemscope itemtype="https://schema.org/FAQPage">
                    <!-- 1 -->
                    <details class="faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                        <summary class="faq-summary" itemprop="name">
                            Qual o prazo médio de diagnóstico?
                            <span class="faq-icon" aria-hidden="true"></span>
                        </summary>
                        <div class="faq-content" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                            <p itemprop="text">Em média, concluímos o diagnóstico em até <strong>24 horas úteis</strong>, dependendo do volume de atendimento e do tipo de equipamento.</p>
                        </div>
                    </details>

                    <!-- 2 -->
                    <details class="faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                        <summary class="faq-summary" itemprop="name">
                            Vocês retiram e entregam o equipamento?
                            <span class="faq-icon" aria-hidden="true"></span>
                        </summary>
                        <div class="faq-content" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                            <p itemprop="text">Sim. Oferecemos <strong>retirada e entrega</strong> em Itapetininga e região, conforme disponibilidade. Consulte valores e horários.</p>
                        </div>
                    </details>

                    <!-- 3 -->
                    <details class="faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                        <summary class="faq-summary" itemprop="name">
                            Os serviços têm garantia?
                            <span class="faq-icon" aria-hidden="true"></span>
                        </summary>
                        <div class="faq-content" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                            <p itemprop="text">Sim. Todos os serviços contam com <strong>garantia</strong>, informada no orçamento conforme o tipo de manutenção realizada.</p>
                        </div>
                    </details>

                    <!-- 4 -->
                    <details class="faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                        <summary class="faq-summary" itemprop="name">
                            Fazem upgrade (SSD, memória, etc.)?
                            <span class="faq-icon" aria-hidden="true"></span>
                        </summary>
                        <div class="faq-content" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                            <p itemprop="text">Fazemos sim. Indicamos peças compatíveis e realizamos a <strong>instalação e configuração</strong> para melhor desempenho.</p>
                        </div>
                    </details>
                </div>
            </div>
        </section>

        <!-- Contato -->
        <section id="contato" class="section">
            <div class="container contact-card">
                <div class="contact-left">
                    <h2>Vamos resolver seu problema?</h2>
                    <p>Chame no WhatsApp e descreva o equipamento e o problema.</p>
                    <div class="btn-center">
                        <a class="btn btn-primary btn-lg" href="https://wa.me/551532725929?text=Olá%20Sonoda!%20Preciso%20de%20assistência%20técnica.">
                            <img src="../icons/whatsapp.svg" alt="" class="wa-ico" aria-hidden="true" /> Falar no WhatsApp
                        </a>
                    </div>
                </div>
                <ul class="contact-right">
                    <li><strong>Telefone:</strong> <a href="tel:+551532725929">(15) 3272-5929</a></li>
                    <li><strong>E-mail:</strong> <a href="mailto:contato@sonodainformatica.com.br">contato@sonodainformatica.com.br</a></li>
                    <li><strong>Endereço:</strong> <a href="https://maps.app.goo.gl/dTATYm74Ez36B6j69" target="_blank" rel="noopener">Virgilio de Rezende, 467B</a></li>
                    <li><strong>Cidade:</strong> Itapetininga / SP</li>
                    <li><strong>Horário:</strong> Seg–Sex 8h–18h; Sáb 8h–13h</li>
                </ul>
            </div>
        </section>
    </main>


@endsection

@push('scripts')
    <script>
        // Menu mobile + anchor smooth + nav shadow + carousel
        const burger = document.querySelector('.burger');
        const menu = document.getElementById('menuMobile');
        const nav = document.querySelector('.nav');

        if (burger && menu) {
            burger.addEventListener('click', () => {
                const isOpen = burger.getAttribute('aria-expanded') === 'true';
                burger.setAttribute('aria-expanded', String(!isOpen));
                if (menu.classList.contains('open')) {
                    menu.classList.remove('open'); menu.setAttribute('hidden','');
                } else {
                    menu.classList.add('open'); menu.removeAttribute('hidden');
                }
            });
            menu.querySelectorAll('a').forEach(a => a.addEventListener('click', () => {
                burger.setAttribute('aria-expanded','false'); menu.classList.remove('open'); menu.setAttribute('hidden','');
            }));
            window.addEventListener('resize', () => {
                if (window.innerWidth > 900) { menu.classList.remove('open'); menu.setAttribute('hidden',''); burger.setAttribute('aria-expanded','false'); }
            });
        }

        // Smooth scroll for internal anchors
        document.querySelectorAll('a[href^="#"]').forEach(link => {
            link.addEventListener('click', (e) => {
                const id = link.getAttribute('href');
                const target = document.querySelector(id);
                if (target) { e.preventDefault(); target.scrollIntoView({ behavior: 'smooth', block: 'start' }); }
            });
        });

        // Nav shadow on scroll
        const onScrollNav = () => { if (!nav) return; if (window.scrollY > 8) nav.classList.add('scrolled'); else nav.classList.remove('scrolled'); };
        onScrollNav(); window.addEventListener('scroll', onScrollNav);

        // Generic carousel initializer (supports multiple instances)
        function initCarousel(root){
            const track = root.querySelector('.car-track');
            const items = Array.from(root.querySelectorAll('.car-item'));
            const prev = root.querySelector('.prev');
            const next = root.querySelector('.next');
            const dotsBox = root.querySelector('.car-dots');
            if (!track || items.length === 0) return;

            let idx = 0;
            const makeDots = () => {
                if (!dotsBox) return;
                dotsBox.innerHTML = '';
                items.forEach((_,i)=>{
                    const b = document.createElement('button');
                    b.setAttribute('aria-label', 'Ir ao slide ' + (i+1));
                    b.addEventListener('click', ()=> goTo(i));
                    dotsBox.appendChild(b);
                });
            };
            const update = () => {
                track.style.transform = 'translateX(' + (-idx * 100) + '%)';
                if (dotsBox) dotsBox.querySelectorAll('button').forEach((b,i)=> b.classList.toggle('active', i===idx));
            };
            const goTo = (i)=>{ idx = (i+items.length)%items.length; update(); };
            const nextFn = ()=> goTo(idx+1);
            const prevFn = ()=> goTo(idx-1);
            makeDots(); update();
            if (next) next.addEventListener('click', nextFn);
            if (prev) prev.addEventListener('click', prevFn);
            let timer = setInterval(nextFn, 4500);
            root.addEventListener('mouseenter', ()=> clearInterval(timer));
            root.addEventListener('mouseleave', ()=> timer = setInterval(nextFn, 4500));
            root.setAttribute('tabindex','0');
            root.addEventListener('keydown', (e)=>{ if (e.key === 'ArrowRight') nextFn(); if (e.key === 'ArrowLeft') prevFn(); });
        }
        document.querySelectorAll('.carousel').forEach(initCarousel);


        // Sidebar controls
        const sidebar = document.getElementById('sidebarNav');
        const backdrop = document.getElementById('backdrop');
        const closeBtn = sidebar ? sidebar.querySelector('.sidebar-close') : null;

        function openSidebar(){
            if (!sidebar || !backdrop) return;
            sidebar.classList.add('open'); sidebar.setAttribute('aria-hidden', 'false');
            backdrop.removeAttribute('hidden');
            burger.setAttribute('aria-expanded','true');
        }
        function closeSidebar(){
            if (!sidebar || !backdrop) return;
            sidebar.classList.remove('open'); sidebar.setAttribute('aria-hidden', 'true');
            backdrop.setAttribute('hidden','');
            burger.setAttribute('aria-expanded','false');
        }

        if (burger && sidebar){
            burger.addEventListener('click', ()=>{
                if (sidebar.classList.contains('open')) closeSidebar(); else openSidebar();
            });
        }
        if (closeBtn) closeBtn.addEventListener('click', closeSidebar);
        if (backdrop) backdrop.addEventListener('click', closeSidebar);
        sidebar?.querySelectorAll('a').forEach(a => a.addEventListener('click', closeSidebar));
        window.addEventListener('keydown', (e)=>{ if (e.key === 'Escape') closeSidebar(); });
        window.addEventListener('resize', ()=>{ if (window.innerWidth > 900) closeSidebar(); });

        document.addEventListener('click', (e) => {
            if (sidebar.classList.contains('open') && !sidebar.contains(e.target) && !burger.contains(e.target)) {
                closeSidebar();
            }
        });


    </script>
@endpush
