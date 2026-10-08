
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Stevie Owen | Full-Stack Laravel Developer</title>

    <meta name="description"
          content="Stevie Owen is a Full-Stack Laravel Developer and IT Lecturer based in Kigali, Rwanda, specializing in Laravel, PHP, modern web applications, databases, and scalable software solutions.">

    <meta name="author" content="Stevie Owen">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;500;600;700;800&family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap"
          rel="stylesheet">

    <!-- Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Plus Jakarta Sans', 'sans-serif'],
                        display: ['Outfit', 'sans-serif'],
                    },
                    colors: {
                        brand: {
                            indigo: '#4F46E5',
                            violet: '#7C3AED',
                            emerald: '#10B981',
                        }
                    },
                    boxShadow: {
                        ambient: '0 20px 50px rgba(15, 23, 42, 0.08)',
                        'ambient-indigo': '0 25px 60px rgba(79, 70, 229, 0.12)',
                    }
                }
            }
        }
    </script>

    <style>
        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
        }

        .font-display {
            font-family: 'Outfit', sans-serif;
        }

        .gradient-text {
            background: linear-gradient(
                135deg,
                #4F46E5 0%,
                #7C3AED 50%,
                #10B981 100%
            );
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
        }

        .hero-gradient {
            background:
                radial-gradient(
                    circle at 10% 10%,
                    rgba(79, 70, 229, 0.12),
                    transparent 32%
                ),
                radial-gradient(
                    circle at 90% 20%,
                    rgba(124, 58, 237, 0.10),
                    transparent 30%
                ),
                radial-gradient(
                    circle at 70% 90%,
                    rgba(16, 185, 129, 0.08),
                    transparent 30%
                );
        }

        .grid-pattern {
            background-image:
                linear-gradient(
                    rgba(148, 163, 184, 0.08) 1px,
                    transparent 1px
                ),
                linear-gradient(
                    90deg,
                    rgba(148, 163, 184, 0.08) 1px,
                    transparent 1px
                );
            background-size: 40px 40px;
        }

        .glass {
            background: rgba(255, 255, 255, 0.82);
            backdrop-filter: blur(16px);
            -webkit-backdrop-filter: blur(16px);
        }

        .project-card {
            transition:
                transform 0.3s ease,
                box-shadow 0.3s ease,
                border-color 0.3s ease;
        }

        .project-card:hover {
            transform: translateY(-6px);
        }

        .floating {
            animation: floating 5s ease-in-out infinite;
        }

        @keyframes floating {
            0%, 100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-8px);
            }
        }

        .pulse-dot {
            animation: pulse-dot 2s infinite;
        }

        @keyframes pulse-dot {
            0%, 100% {
                box-shadow: 0 0 0 0 rgba(16, 185, 129, 0.35);
            }

            50% {
                box-shadow: 0 0 0 8px rgba(16, 185, 129, 0);
            }
        }
    </style>
</head>

<body class="bg-slate-50 text-slate-900 antialiased">

    <!-- ========================================================= -->
    <!-- NAVIGATION -->
    <!-- ========================================================= -->

    <header class="fixed inset-x-0 top-0 z-50">
        <nav class="glass border-b border-slate-200/70 shadow-sm">
            <div class="mx-auto flex max-w-7xl items-center justify-between px-6 py-4 lg:px-8">

                <!-- Logo -->
                <a href="#home"
                   class="group flex items-center gap-3">

                    <div class="flex h-10 w-10 items-center justify-center rounded-xl
                                bg-gradient-to-br from-indigo-600 to-violet-600
                                text-lg font-bold text-white shadow-lg shadow-indigo-500/25">
                        SO
                    </div>

                    <div class="hidden sm:block">
                        <p class="font-display text-lg font-bold tracking-tight text-slate-900">
                            Stevie Owen
                        </p>
                        <p class="text-[10px] font-semibold uppercase tracking-[0.18em] text-slate-500">
                            Laravel Developer
                        </p>
                    </div>
                </a>

                <!-- Desktop Navigation -->
                <div class="hidden items-center gap-8 md:flex">

                    <a href="#projects"
                       class="text-sm font-semibold text-slate-600 transition hover:text-indigo-600">
                        Projects
                    </a>

                    <a href="#stack"
                       class="text-sm font-semibold text-slate-600 transition hover:text-indigo-600">
                        Stack
                    </a>

                    <a href="#about"
                       class="text-sm font-semibold text-slate-600 transition hover:text-indigo-600">
                        About
                    </a>

                    <a href="#contact"
                       class="rounded-xl bg-indigo-600 px-5 py-2.5 text-sm font-bold text-white
                              shadow-lg shadow-indigo-500/20 transition
                              hover:bg-indigo-700 hover:shadow-indigo-500/30">
                        Let's Talk
                    </a>
                </div>

                <!-- Mobile CTA -->
                <a href="#contact"
                   class="rounded-xl bg-indigo-600 px-4 py-2 text-sm font-bold text-white md:hidden">
                    Contact
                </a>
            </div>
        </nav>
    </header>


    <main>

        <!-- ===================================================== -->
        <!-- HERO -->
        <!-- ===================================================== -->

        <section id="home"
                 class="hero-gradient relative isolate overflow-hidden pt-32">

            <div class="absolute inset-0 -z-10 grid-pattern"></div>

            <!-- Decorative blobs -->
            <div class="absolute left-0 top-40 -z-10 h-72 w-72 rounded-full
                        bg-indigo-300/20 blur-3xl"></div>

            <div class="absolute right-0 top-20 -z-10 h-80 w-80 rounded-full
                        bg-violet-300/20 blur-3xl"></div>

            <div class="mx-auto max-w-7xl px-6 pb-24 pt-16 lg:px-8 lg:pb-32">

                <div class="grid items-center gap-16 lg:grid-cols-[1.15fr_0.85fr]">

                    <!-- Hero Copy -->
                    <div>

                        <div class="mb-7 inline-flex items-center gap-2 rounded-full
                                    border border-emerald-200 bg-white px-4 py-2
                                    text-sm font-semibold text-slate-700 shadow-sm">

                            <span class="pulse-dot h-2.5 w-2.5 rounded-full bg-emerald-500"></span>

                            Available for opportunities
                        </div>

                        <h1 class="font-display text-5xl font-extrabold leading-[1.05]
                                   tracking-tight text-slate-950 sm:text-6xl lg:text-7xl">

                            Building digital
                            <span class="gradient-text">
                                products
                            </span>

                            that work.
                        </h1>

                        <p class="mt-7 max-w-2xl text-lg leading-8 text-slate-600 sm:text-xl">
                            I'm <strong class="text-slate-900">Stevie Owen</strong>,
                            a Full-Stack Laravel Developer and IT Lecturer based in
                            <strong class="text-slate-900">Kigali, Rwanda</strong>.
                            I design and build reliable, scalable and beautiful web
                            applications from database to interface.
                        </p>

                        <!-- CTA -->
                        <div class="mt-9 flex flex-col gap-4 sm:flex-row">

                            <a href="#projects"
                               class="inline-flex items-center justify-center gap-2 rounded-xl
                                      bg-indigo-600 px-6 py-3.5 text-sm font-bold text-white
                                      shadow-xl shadow-indigo-500/20 transition
                                      hover:-translate-y-0.5 hover:bg-indigo-700">

                                Explore My Work

                                <svg class="h-4 w-4"
                                     fill="none"
                                     stroke="currentColor"
                                     viewBox="0 0 24 24">
                                    <path stroke-linecap="round"
                                          stroke-linejoin="round"
                                          stroke-width="2"
                                          d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                                </svg>
                            </a>

                            <a href="#contact"
                               class="inline-flex items-center justify-center gap-2 rounded-xl
                                      border border-slate-300 bg-white px-6 py-3.5
                                      text-sm font-bold text-slate-700 shadow-sm
                                      transition hover:border-indigo-300
                                      hover:text-indigo-600">

                                Start a Conversation
                            </a>
                        </div>

                        <!-- Social Links -->
                        <div class="mt-9 flex items-center gap-5">

                            <span class="text-xs font-bold uppercase tracking-widest text-slate-400">
                                Connect
                            </span>

                            <a href="https://github.com/StevieOwen"
                               target="_blank"
                               rel="noopener noreferrer"
                               aria-label="GitHub"
                               class="text-slate-500 transition hover:text-slate-900">

                                <svg class="h-5 w-5"
                                     fill="currentColor"
                                     viewBox="0 0 24 24">
                                    <path fill-rule="evenodd"
                                          d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483
                                          0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608
                                          1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951
                                          0-1.093.39-1.987 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844
                                          c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.701 1.028 1.595
                                          1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747
                                          0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.523 2 12 2z"
                                          clip-rule="evenodd"/>
                                </svg>
                            </a>

                            <a href="https://www.linkedin.com/in/donfack-owen-3873b223b/"
                               target="_blank"
                               rel="noopener noreferrer"
                               aria-label="LinkedIn"
                               class="text-slate-500 transition hover:text-indigo-600">

                                <svg class="h-5 w-5"
                                     fill="currentColor"
                                     viewBox="0 0 24 24">
                                    <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853
                                             0-2.136 1.445-2.136 2.939v5.667H9.351V8.998h3.414v1.561h.046c.477-.9
                                             1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.288zM5.337
                                             7.433a2.062 2.062 0 110-4.124 2.062 2.062 0 010 4.124zM7.119
                                             20.452H3.555V8.998h3.564v11.454zM22.225 0H1.771C.792 0 0 .774 0
                                             1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227
                                             24 22.271V1.729C24 .774 23.2 0 22.225 0z"/>
                                </svg>
                            </a>

                            <a href="mailto:steviewamba14@gmail.com"
                               aria-label="Email"
                               class="text-slate-500 transition hover:text-emerald-600">

                                <svg class="h-5 w-5"
                                     fill="none"
                                     stroke="currentColor"
                                     viewBox="0 0 24 24">
                                    <path stroke-linecap="round"
                                          stroke-linejoin="round"
                                          stroke-width="2"
                                          d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                </svg>
                            </a>
                        </div>
                    </div>


                    <!-- Hero Visual -->
                    <div class="relative hidden lg:block">

                        <div class="floating relative mx-auto max-w-md">

                            <!-- Ambient glow -->
                            <div class="absolute -inset-8 rounded-[3rem]
                                        bg-gradient-to-br from-indigo-500/20
                                        via-violet-500/10 to-emerald-500/20 blur-3xl">
                            </div>

                            <div class="relative overflow-hidden rounded-[2rem]
                                        border border-slate-200/80 bg-white
                                        p-7 shadow-2xl shadow-slate-300/40">

                                <!-- Browser Header -->
                                <div class="mb-6 flex items-center justify-between">

                                    <div class="flex gap-2">
                                        <span class="h-3 w-3 rounded-full bg-red-400"></span>
                                        <span class="h-3 w-3 rounded-full bg-amber-400"></span>
                                        <span class="h-3 w-3 rounded-full bg-emerald-400"></span>
                                    </div>

                                    <div class="rounded-lg bg-slate-100 px-3 py-1 text-[10px]
                                                font-semibold text-slate-400">
                                        stevie.dev
                                    </div>
                                </div>

                                <!-- Code Window -->
                                <div class="rounded-2xl bg-slate-950 p-6 font-mono text-sm
                                            leading-7 shadow-inner">

                                    <div class="text-slate-500">
                                        // Build something meaningful
                                    </div>

                                    <div>
                                        <span class="text-violet-400">class</span>
                                        <span class="text-sky-300"> Developer</span>
                                    </div>

                                    <div class="pl-4">
                                        <span class="text-violet-400">public function</span>
                                        <span class="text-emerald-300"> build</span>()
                                    </div>

                                    <div class="pl-8">
                                        <span class="text-slate-400">return</span>
                                    </div>

                                    <div class="pl-12">
                                        <span class="text-amber-300">'innovation'</span>
                                        <span class="text-slate-400">-></span>
                                    </div>

                                    <div class="pl-12">
                                        <span class="text-amber-300">'quality'</span>
                                        <span class="text-slate-400">-></span>
                                    </div>

                                    <div class="pl-12">
                                        <span class="text-amber-300">'impact'</span>;
                                    </div>

                                    <div class="pl-4">}</div>
                                    <div>}</div>

                                    <div class="mt-4 text-emerald-400">
                                        ✓ Ready to deploy
                                    </div>
                                </div>

                                <!-- Skills -->
                                <div class="mt-6 grid grid-cols-3 gap-3">

                                    <div class="rounded-xl bg-indigo-50 p-3 text-center">
                                        <p class="font-display text-lg font-bold text-indigo-600">
                                            PHP
                                        </p>
                                        <p class="text-[10px] font-semibold text-slate-500">
                                            Backend
                                        </p>
                                    </div>

                                    <div class="rounded-xl bg-violet-50 p-3 text-center">
                                        <p class="font-display text-lg font-bold text-violet-600">
                                            Laravel
                                        </p>
                                        <p class="text-[10px] font-semibold text-slate-500">
                                            Framework
                                        </p>
                                    </div>

                                    <div class="rounded-xl bg-emerald-50 p-3 text-center">
                                        <p class="font-display text-lg font-bold text-emerald-600">
                                            SQL
                                        </p>
                                        <p class="text-[10px] font-semibold text-slate-500">
                                            Database
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>


        <!-- ===================================================== -->
        <!-- PROJECTS -->
        <!-- ===================================================== -->

        <section id="projects" class="bg-white py-24">

            <div class="mx-auto max-w-7xl px-6 lg:px-8">

                <div class="mb-14 flex flex-col justify-between gap-6 md:flex-row md:items-end">

                    <div>
                        <p class="mb-3 text-sm font-bold uppercase tracking-[0.2em] text-indigo-600">
                            Selected Work
                        </p>

                        <h2 class="font-display text-4xl font-extrabold tracking-tight
                                   text-slate-950 sm:text-5xl">
                            Projects I've built
                        </h2>

                        <p class="mt-4 max-w-2xl text-slate-500">
                            A selection of software projects focused on solving real-world
                            problems through thoughtful engineering and modern technologies.
                        </p>
                    </div>

                    <div class="hidden h-px flex-1 bg-slate-200 md:ml-12 md:block"></div>
                </div>


                <!-- Dynamic Projects -->
                <div class="grid gap-8 md:grid-cols-2">

                    @foreach($projects as $key => $project)

                        <article
                            class="project-card group relative overflow-hidden rounded-3xl
                                   border border-slate-200/80 bg-white p-7
                                   shadow-xl shadow-slate-200/60
                                   hover:border-indigo-200 hover:shadow-2xl
                                   hover:shadow-indigo-500/10">

                            <!-- Decorative gradient -->
                            <div class="absolute right-0 top-0 h-32 w-32 rounded-full
                                        bg-indigo-500/5 blur-2xl transition
                                        group-hover:bg-indigo-500/10">
                            </div>

                            <div class="relative">

                                <!-- Badge -->
                                <div class="mb-6 flex items-center justify-between">

                                    <span class="inline-flex rounded-full
                                                 bg-indigo-50 px-3 py-1.5
                                                 text-xs font-bold text-indigo-600">
                                        {{ $project['badge'] }}
                                    </span>

                                    <span class="text-xs font-semibold text-slate-400">
                                        {{ str_pad($loop->iteration, 2, '0', STR_PAD_LEFT) }}
                                    </span>
                                </div>

                                <!-- Title -->
                                <h3 class="font-display text-2xl font-bold tracking-tight
                                           text-slate-900">
                                    {{ $project['title'] }}
                                </h3>

                                <p class="mt-2 text-sm font-semibold text-indigo-600">
                                    {{ $project['subtitle'] }}
                                </p>

                                <!-- Description -->
                                <p class="mt-5 text-sm leading-7 text-slate-600">
                                    {{ $project['description'] }}
                                </p>

                                <!-- Highlights -->
                                @if(!empty($project['highlights']))
                                    <div class="mt-6 space-y-3">

                                        @foreach($project['highlights'] as $highlight)

                                            <div class="flex items-start gap-3">

                                                <span class="mt-1 flex h-5 w-5 shrink-0
                                                             items-center justify-center
                                                             rounded-full bg-emerald-50">

                                                    <svg class="h-3 w-3 text-emerald-600"
                                                         fill="none"
                                                         stroke="currentColor"
                                                         viewBox="0 0 24 24">
                                                        <path stroke-linecap="round"
                                                              stroke-linejoin="round"
                                                              stroke-width="3"
                                                              d="M5 13l4 4L19 7"/>
                                                    </svg>
                                                </span>

                                                <span class="text-sm leading-6 text-slate-600">
                                                    {{ $highlight }}
                                                </span>
                                            </div>

                                        @endforeach

                                    </div>
                                @endif

                                <!-- Stack -->
                                @if(!empty($project['stack']))
                                    <div class="mt-7 flex flex-wrap gap-2">

                                        @foreach($project['stack'] as $technology)

                                            <span class="rounded-lg border border-slate-200
                                                         bg-slate-50 px-3 py-1.5
                                                         text-xs font-semibold text-slate-600
                                                         transition group-hover:border-indigo-100
                                                         group-hover:bg-indigo-50/50">
                                                {{ $technology }}
                                            </span>

                                        @endforeach

                                    </div>
                                @endif

                                <!-- Links -->
                                <div class="mt-8 flex items-center gap-3 border-t
                                            border-slate-100 pt-6">

                                    @if(!empty($project['url']))
                                        <a href="{{ $project['url'] }}"
                                           target="_blank"
                                           rel="noopener noreferrer"
                                           class="inline-flex items-center gap-2 rounded-xl
                                                  bg-indigo-600 px-4 py-2.5 text-xs
                                                  font-bold text-white shadow-lg
                                                  shadow-indigo-500/15 transition
                                                  hover:bg-indigo-700">

                                            Live Project

                                            <svg class="h-3.5 w-3.5"
                                                 fill="none"
                                                 stroke="currentColor"
                                                 viewBox="0 0 24 24">
                                                <path stroke-linecap="round"
                                                      stroke-linejoin="round"
                                                      stroke-width="2"
                                                      d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/>
                                            </svg>
                                        </a>
                                    @endif

                                    @if(!empty($project['github']))
                                        <a href="{{ $project['github'] }}"
                                           target="_blank"
                                           rel="noopener noreferrer"
                                           class="inline-flex items-center gap-2 rounded-xl
                                                  border border-slate-200 bg-white px-4 py-2.5
                                                  text-xs font-bold text-slate-700
                                                  transition hover:border-slate-300
                                                  hover:bg-slate-50">

                                            GitHub

                                            <svg class="h-3.5 w-3.5"
                                                 fill="currentColor"
                                                 viewBox="0 0 24 24">
                                                <path fill-rule="evenodd"
                                                      d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425
                                                      2.865 8.18 6.839 9.504.5.092.682-.217.682-.483
                                                      0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343
                                                      -3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466
                                                      -.908-.62.069-.608.069-.608 1.003.07 1.531 1.032
                                                      1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647
                                                      .35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951
                                                      0-1.093.39-1.987 1.029-2.688-.103-.253-.446-1.272.098
                                                      -2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844
                                                      c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027
                                                      2.747-1.027.546 1.379.202 2.398.1 2.651.64.701 1.028
                                                      1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359
                                                      .309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0
                                                      .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484
                                                      17.523 2 12 2z"
                                                      clip-rule="evenodd"/>
                                            </svg>
                                        </a>
                                    @endif

                                </div>
                            </div>
                        </article>

                    @endforeach

                </div>

            </div>
        </section>


        <!-- ===================================================== -->
        <!-- STACK -->
        <!-- ===================================================== -->

        <section id="stack" class="relative overflow-hidden bg-slate-50 py-24">

            <div class="absolute inset-0 grid-pattern opacity-50"></div>

            <div class="relative mx-auto max-w-7xl px-6 lg:px-8">

                <div class="mx-auto max-w-3xl text-center">

                    <p class="mb-3 text-sm font-bold uppercase tracking-[0.2em] text-violet-600">
                        Technology
                    </p>

                    <h2 class="font-display text-4xl font-extrabold tracking-tight
                               text-slate-950 sm:text-5xl">
                        My development stack
                    </h2>

                    <p class="mt-5 text-slate-500">
                        Tools and technologies I use to transform ideas into maintainable,
                        production-ready software.
                    </p>
                </div>


                <div class="mt-14 grid gap-5 sm:grid-cols-2 lg:grid-cols-4">

                    <!-- Laravel -->
                    <div class="rounded-2xl border border-slate-200/80 bg-white p-6
                                shadow-xl shadow-slate-200/50 transition hover:-translate-y-1
                                hover:shadow-2xl hover:shadow-red-500/10">

                        <div class="mb-5 flex h-12 w-12 items-center justify-center
                                    rounded-xl bg-red-50 text-red-600">

                            <span class="font-display text-lg font-extrabold">
                                L
                            </span>
                        </div>

                        <h3 class="font-display text-lg font-bold text-slate-900">
                            Laravel
                        </h3>

                        <p class="mt-2 text-sm leading-6 text-slate-500">
                            Robust PHP applications, APIs, authentication and backend architecture.
                        </p>
                    </div>


                    <!-- PHP -->
                    <div class="rounded-2xl border border-slate-200/80 bg-white p-6
                                shadow-xl shadow-slate-200/50 transition hover:-translate-y-1
                                hover:shadow-2xl hover:shadow-indigo-500/10">

                        <div class="mb-5 flex h-12 w-12 items-center justify-center
                                    rounded-xl bg-indigo-50 text-indigo-600">

                            <span class="font-mono text-lg font-extrabold">
                                &lt;?&gt;
                            </span>
                        </div>

                        <h3 class="font-display text-lg font-bold text-slate-900">
                            PHP
                        </h3>

                        <p class="mt-2 text-sm leading-6 text-slate-500">
                            Clean object-oriented backend development and business logic.
                        </p>
                    </div>


                    <!-- JavaScript -->
                    <div class="rounded-2xl border border-slate-200/80 bg-white p-6
                                shadow-xl shadow-slate-200/50 transition hover:-translate-y-1
                                hover:shadow-2xl hover:shadow-amber-500/10">

                        <div class="mb-5 flex h-12 w-12 items-center justify-center
                                    rounded-xl bg-amber-50 text-amber-600">

                            <span class="font-mono text-lg font-extrabold">
                                JS
                            </span>
                        </div>

                        <h3 class="font-display text-lg font-bold text-slate-900">
                            JavaScript
                        </h3>

                        <p class="mt-2 text-sm leading-6 text-slate-500">
                            Interactive interfaces, asynchronous applications and modern frontend behavior.
                        </p>
                    </div>


                    <!-- Tailwind -->
                    <div class="rounded-2xl border border-slate-200/80 bg-white p-6
                                shadow-xl shadow-slate-200/50 transition hover:-translate-y-1
                                hover:shadow-2xl hover:shadow-cyan-500/10">

                        <div class="mb-5 flex h-12 w-12 items-center justify-center
                                    rounded-xl bg-cyan-50 text-cyan-600">

                            <span class="font-mono text-sm font-extrabold">
                                TW
                            </span>
                        </div>

                        <h3 class="font-display text-lg font-bold text-slate-900">
                            Tailwind CSS
                        </h3>

                        <p class="mt-2 text-sm leading-6 text-slate-500">
                            Responsive, scalable and polished user interfaces.
                        </p>
                    </div>


                    <!-- MySQL -->
                    <div class="rounded-2xl border border-slate-200/80 bg-white p-6
                                shadow-xl shadow-slate-200/50 transition hover:-translate-y-1
                                hover:shadow-2xl hover:shadow-blue-500/10">

                        <div class="mb-5 flex h-12 w-12 items-center justify-center
                                    rounded-xl bg-blue-50 text-blue-600">

                            <span class="font-mono text-sm font-extrabold">
                                SQL
                            </span>
                        </div>

                        <h3 class="font-display text-lg font-bold text-slate-900">
                            MySQL
                        </h3>

                        <p class="mt-2 text-sm leading-6 text-slate-500">
                            Relational data modeling, queries, optimization and database design.
                        </p>
                    </div>


                    <!-- Git -->
                    <div class="rounded-2xl border border-slate-200/80 bg-white p-6
                                shadow-xl shadow-slate-200/50 transition hover:-translate-y-1
                                hover:shadow-2xl hover:shadow-slate-500/10">

                        <div class="mb-5 flex h-12 w-12 items-center justify-center
                                    rounded-xl bg-slate-100 text-slate-700">

                            <span class="font-mono text-lg font-extrabold">
                                Git
                            </span>
                        </div>

                        <h3 class="font-display text-lg font-bold text-slate-900">
                            Git & GitHub
                        </h3>

                        <p class="mt-2 text-sm leading-6 text-slate-500">
                            Version control, collaboration, branching and deployment workflows.
                        </p>
                    </div>


                    <!-- Alpine -->
                    <div class="rounded-2xl border border-slate-200/80 bg-white p-6
                                shadow-xl shadow-slate-200/50 transition hover:-translate-y-1
                                hover:shadow-2xl hover:shadow-violet-500/10">

                        <div class="mb-5 flex h-12 w-12 items-center justify-center
                                    rounded-xl bg-violet-50 text-violet-600">

                            <span class="font-mono text-sm font-extrabold">
                                A.js
                            </span>
                        </div>

                        <h3 class="font-display text-lg font-bold text-slate-900">
                            Alpine.js
                        </h3>

                        <p class="mt-2 text-sm leading-6 text-slate-500">
                            Lightweight reactive interactions directly inside Blade templates.
                        </p>
                    </div>


                    <!-- REST APIs -->
                    <div class="rounded-2xl border border-slate-200/80 bg-white p-6
                                shadow-xl shadow-slate-200/50 transition hover:-translate-y-1
                                hover:shadow-2xl hover:shadow-emerald-500/10">

                        <div class="mb-5 flex h-12 w-12 items-center justify-center
                                    rounded-xl bg-emerald-50 text-emerald-600">

                            <span class="font-mono text-sm font-extrabold">
                                API
                            </span>
                        </div>

                        <h3 class="font-display text-lg font-bold text-slate-900">
                            REST APIs
                        </h3>

                        <p class="mt-2 text-sm leading-6 text-slate-500">
                            Secure integrations and API-driven application architectures.
                        </p>
                    </div>

                </div>
            </div>
        </section>


        <!-- ===================================================== -->
        <!-- ABOUT -->
        <!-- ===================================================== -->

        <section id="about" class="bg-white py-24">

            <div class="mx-auto max-w-7xl px-6 lg:px-8">

                <div class="grid items-center gap-14 lg:grid-cols-2">

                    <!-- Content -->
                    <div>

                        <p class="mb-3 text-sm font-bold uppercase tracking-[0.2em] text-emerald-600">
                            About Me
                        </p>

                        <h2 class="font-display text-4xl font-extrabold tracking-tight
                                   text-slate-950 sm:text-5xl">
                            Developer by craft.
                            <span class="gradient-text">
                                Educator by passion.
                            </span>
                        </h2>

                        <div class="mt-7 space-y-5 text-base leading-8 text-slate-600">

                            <p>
                                I'm Stevie Owen, a Full-Stack Laravel Developer and IT Lecturer
                                passionate about building practical technology that solves
                                meaningful problems.
                            </p>

                            <p>
                                My work spans backend engineering, database architecture,
                                responsive frontend development, system administration and
                                software engineering education.
                            </p>

                            <p>
                                I enjoy taking an idea from an initial concept through system
                                design, development, testing and deployment — while keeping
                                the resulting software maintainable and user-focused.
                            </p>

                        </div>

                        <!-- Location -->
                        <div class="mt-8 flex items-center gap-3">

                            <div class="flex h-10 w-10 items-center justify-center
                                        rounded-xl bg-emerald-50 text-emerald-600">

                                <svg class="h-5 w-5"
                                     fill="none"
                                     stroke="currentColor"
                                     viewBox="0 0 24 24">
                                    <path stroke-linecap="round"
                                          stroke-linejoin="round"
                                          stroke-width="2"
                                          d="M17.657 16.657L13.414 21.0a2 2 0 01-2.828 0l-4.243-4.343a8 8 0 1111.314 0z"/>
                                    <path stroke-linecap="round"
                                          stroke-linejoin="round"
                                          stroke-width="2"
                                          d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                </svg>
                            </div>

                            <div>
                                <p class="text-xs font-semibold uppercase tracking-wider text-slate-400">
                                    Based in
                                </p>

                                <p class="font-bold text-slate-800">
                                    Kigali, Rwanda
                                </p>
                            </div>
                        </div>
                    </div>


                    <!-- Values Card -->
                    <div class="relative">

                        <div class="absolute -inset-5 rounded-[2rem]
                                    bg-gradient-to-br from-indigo-100
                                    via-violet-100 to-emerald-100 blur-2xl">
                        </div>

                        <div class="relative rounded-3xl border border-slate-200/80
                                    bg-white p-8 shadow-2xl shadow-slate-200/70">

                            <div class="mb-8 flex items-center justify-between">

                                <div>
                                    <p class="text-xs font-bold uppercase tracking-[0.18em]
                                              text-indigo-600">
                                        Engineering Principles
                                    </p>

                                    <h3 class="mt-2 font-display text-2xl font-bold text-slate-900">
                                        How I build
                                    </h3>
                                </div>

                                <div class="flex h-12 w-12 items-center justify-center
                                            rounded-2xl bg-gradient-to-br from-indigo-600
                                            to-violet-600 text-white shadow-lg">

                                    <svg class="h-6 w-6"
                                         fill="none"
                                         stroke="currentColor"
                                         viewBox="0 0 24 24">
                                        <path stroke-linecap="round"
                                              stroke-linejoin="round"
                                              stroke-width="2"
                                              d="M10.5 6h3m-7.5 3h12M5 15h14M8 18h8"/>
                                    </svg>
                                </div>
                            </div>


                            <div class="space-y-6">

                                <div class="flex gap-4">

                                    <div class="flex h-10 w-10 shrink-0 items-center
                                                justify-center rounded-xl bg-indigo-50
                                                font-bold text-indigo-600">
                                        01
                                    </div>

                                    <div>
                                        <h4 class="font-bold text-slate-900">
                                            Understand the problem
                                        </h4>

                                        <p class="mt-1 text-sm leading-6 text-slate-500">
                                            Start with users, requirements and the actual
                                            business problem before writing code.
                                        </p>
                                    </div>
                                </div>


                                <div class="flex gap-4">

                                    <div class="flex h-10 w-10 shrink-0 items-center
                                                justify-center rounded-xl bg-violet-50
                                                font-bold text-violet-600">
                                        02
                                    </div>

                                    <div>
                                        <h4 class="font-bold text-slate-900">
                                            Design for maintainability
                                        </h4>

                                        <p class="mt-1 text-sm leading-6 text-slate-500">
                                            Build clear architectures, reusable components
                                            and well-structured databases.
                                        </p>
                                    </div>
                                </div>


                                <div class="flex gap-4">

                                    <div class="flex h-10 w-10 shrink-0 items-center
                                                justify-center rounded-xl bg-emerald-50
                                                font-bold text-emerald-600">
                                        03
                                    </div>

                                    <div>
                                        <h4 class="font-bold text-slate-900">
                                            Deliver real value
                                        </h4>

                                        <p class="mt-1 text-sm leading-6 text-slate-500">
                                            Focus on performance, usability, security and
                                            measurable outcomes.
                                        </p>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </section>


        <!-- ===================================================== -->
        <!-- CONTACT -->
        <!-- ===================================================== -->

        <section id="contact"
                 class="relative overflow-hidden bg-slate-950 py-24 text-white">

            <!-- Background -->
            <div class="absolute inset-0 opacity-30">
                <div class="absolute left-0 top-0 h-96 w-96 rounded-full
                            bg-indigo-600 blur-[120px]">
                </div>

                <div class="absolute bottom-0 right-0 h-96 w-96 rounded-full
                            bg-violet-600 blur-[120px]">
                </div>
            </div>

            <div class="relative mx-auto max-w-7xl px-6 lg:px-8">

                <div class="grid gap-14 lg:grid-cols-2">

                    <!-- Contact Intro -->
                    <div>

                        <p class="mb-3 text-sm font-bold uppercase tracking-[0.2em] text-emerald-400">
                            Get In Touch
                        </p>

                        <h2 class="font-display text-4xl font-extrabold tracking-tight
                                   sm:text-5xl">
                            Have a project in mind?
                        </h2>

                        <p class="mt-6 max-w-xl text-lg leading-8 text-slate-400">
                            Whether you're building a new product, improving an existing
                            system, or looking for a Laravel developer to join your team,
                            I'd love to hear from you.
                        </p>


                        <!-- Contact Details -->
                        <div class="mt-10 space-y-5">

                            <a href="mailto:steviewamba14@gmail.com"
                               class="group flex items-center gap-4">

                                <div class="flex h-12 w-12 items-center justify-center
                                            rounded-xl bg-white/10 text-indigo-300
                                            transition group-hover:bg-indigo-600
                                            group-hover:text-white">

                                    <svg class="h-5 w-5"
                                         fill="none"
                                         stroke="currentColor"
                                         viewBox="0 0 24 24">
                                        <path stroke-linecap="round"
                                              stroke-linejoin="round"
                                              stroke-width="2"
                                              d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                    </svg>
                                </div>

                                <div>
                                    <p class="text-xs font-semibold uppercase tracking-wider text-slate-500">
                                        Email
                                    </p>

                                    <p class="font-semibold text-white">
                                        steviewamba14@gmail.com
                                    </p>
                                </div>
                            </a>


                            <a href="https://wa.me/250791920473"
                               target="_blank"
                               rel="noopener noreferrer"
                               class="group flex items-center gap-4">

                                <div class="flex h-12 w-12 items-center justify-center
                                            rounded-xl bg-white/10 text-emerald-300
                                            transition group-hover:bg-emerald-600
                                            group-hover:text-white">

                                    <svg class="h-5 w-5"
                                         fill="none"
                                         stroke="currentColor"
                                         viewBox="0 0 24 24">
                                        <path stroke-linecap="round"
                                              stroke-linejoin="round"
                                              stroke-width="2"
                                              d="M21 11.5a8.38 8.38 0 01-9 8.5 8.5 8.5 0 01-4.1-1.05L3 20l1.05-4.9A8.5 8.5 0 1112 20"/>
                                    </svg>
                                </div>

                                <div>
                                    <p class="text-xs font-semibold uppercase tracking-wider text-slate-500">
                                        Phone / WhatsApp
                                    </p>

                                    <p class="font-semibold text-white">
                                        +250 791 920 473
                                    </p>
                                </div>
                            </a>


                            <div class="flex items-center gap-4">

                                <div class="flex h-12 w-12 items-center justify-center
                                            rounded-xl bg-white/10 text-violet-300">

                                    <svg class="h-5 w-5"
                                         fill="none"
                                         stroke="currentColor"
                                         viewBox="0 0 24 24">
                                        <path stroke-linecap="round"
                                              stroke-linejoin="round"
                                              stroke-width="2"
                                              d="M17.657 16.657L13.414 21a2 2 0 01-2.828 0l-4.243-4.343a8 8 0 1111.314 0z"/>
                                        <path stroke-linecap="round"
                                              stroke-linejoin="round"
                                              stroke-width="2"
                                              d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                    </svg>
                                </div>

                                <div>
                                    <p class="text-xs font-semibold uppercase tracking-wider text-slate-500">
                                        Location
                                    </p>

                                    <p class="font-semibold text-white">
                                        Kigali, Rwanda
                                    </p>
                                </div>
                            </div>

                        </div>
                    </div>


                    <!-- Contact Form -->
                    <div class="rounded-3xl border border-white/10
                                bg-white/[0.06] p-7 shadow-2xl
                                backdrop-blur-xl sm:p-9">

                        @if(session('success'))

                            <div class="mb-6 flex items-start gap-3 rounded-xl
                                        border border-emerald-400/20
                                        bg-emerald-500/10 p-4 text-sm text-emerald-300">

                                <svg class="mt-0.5 h-5 w-5 shrink-0"
                                     fill="none"
                                     stroke="currentColor"
                                     viewBox="0 0 24 24">
                                    <path stroke-linecap="round"
                                          stroke-linejoin="round"
                                          stroke-width="2"
                                          d="M5 13l4 4L19 7"/>
                                </svg>

                                <span>
                                    {{ session('success') }}
                                </span>
                            </div>

                        @endif


                        <form action="{{ route('contact.send') }}"
                              method="POST"
                              class="space-y-5">

                            @csrf

                            <!-- Name -->
                            <div>
                                <label for="name"
                                       class="mb-2 block text-sm font-semibold text-slate-200">
                                    Your Name
                                </label>

                                <input
                                    type="text"
                                    id="name"
                                    name="name"
                                    value="{{ old('name') }}"
                                    required
                                    autocomplete="name"
                                    placeholder="John Doe"
                                    class="w-full rounded-xl border border-white/10
                                           bg-white/5 px-4 py-3.5 text-sm text-white
                                           outline-none placeholder:text-slate-500
                                           transition focus:border-indigo-400
                                           focus:ring-2 focus:ring-indigo-500/20">
                            </div>


                            <!-- Email -->
                            <div>
                                <label for="email"
                                       class="mb-2 block text-sm font-semibold text-slate-200">
                                    Email Address
                                </label>

                                <input
                                    type="email"
                                    id="email"
                                    name="email"
                                    value="{{ old('email') }}"
                                    required
                                    autocomplete="email"
                                    placeholder="john@example.com"
                                    class="w-full rounded-xl border border-white/10
                                           bg-white/5 px-4 py-3.5 text-sm text-white
                                           outline-none placeholder:text-slate-500
                                           transition focus:border-indigo-400
                                           focus:ring-2 focus:ring-indigo-500/20">
                            </div>


                            <!-- Subject -->
                            <div>
                                <label for="subject"
                                       class="mb-2 block text-sm font-semibold text-slate-200">
                                    Subject
                                </label>

                                <input
                                    type="text"
                                    id="subject"
                                    name="subject"
                                    value="{{ old('subject') }}"
                                    required
                                    placeholder="Let's build something"
                                    class="w-full rounded-xl border border-white/10
                                           bg-white/5 px-4 py-3.5 text-sm text-white
                                           outline-none placeholder:text-slate-500
                                           transition focus:border-indigo-400
                                           focus:ring-2 focus:ring-indigo-500/20">
                            </div>


                            <!-- Message -->
                            <div>
                                <label for="message"
                                       class="mb-2 block text-sm font-semibold text-slate-200">
                                    Message
                                </label>

                                <textarea
                                    id="message"
                                    name="message"
                                    rows="5"
                                    required
                                    placeholder="Tell me about your project..."
                                    class="w-full resize-none rounded-xl border border-white/10
                                           bg-white/5 px-4 py-3.5 text-sm text-white
                                           outline-none placeholder:text-slate-500
                                           transition focus:border-indigo-400
                                           focus:ring-2 focus:ring-indigo-500/20">{{ old('message') }}</textarea>
                            </div>


                            <!-- Submit -->
                            <button
                                type="submit"
                                class="group flex w-full items-center justify-center gap-2
                                       rounded-xl bg-gradient-to-r from-indigo-600
                                       to-violet-600 px-6 py-4 text-sm font-bold text-white
                                       shadow-xl shadow-indigo-900/30 transition
                                       hover:-translate-y-0.5 hover:from-indigo-500
                                       hover:to-violet-500">

                                Send Message

                                <svg class="h-4 w-4 transition-transform
                                            group-hover:translate-x-1"
                                     fill="none"
                                     stroke="currentColor"
                                     viewBox="0 0 24 24">
                                    <path stroke-linecap="round"
                                          stroke-linejoin="round"
                                          stroke-width="2"
                                          d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                                </svg>
                            </button>

                        </form>
                    </div>

                </div>
            </div>
        </section>

    </main>


    <!-- ========================================================= -->
    <!-- FOOTER -->
    <!-- ========================================================= -->

    <footer class="border-t border-slate-200 bg-white">

        <div class="mx-auto flex max-w-7xl flex-col gap-5
                    px-6 py-8 sm:flex-row sm:items-center
                    sm:justify-between lg:px-8">

            <div>
                <p class="font-display font-bold text-slate-900">
                    Stevie Owen
                </p>

                <p class="mt-1 text-xs text-slate-500">
                    Full-Stack Laravel Developer & IT Lecturer
                </p>
            </div>


            <div class="flex items-center gap-5">

                <a href="https://github.com/StevieOwen"
                   target="_blank"
                   rel="noopener noreferrer"
                   class="text-sm font-semibold text-slate-500 transition
                          hover:text-slate-900">
                    GitHub
                </a>

                <a href="https://www.linkedin.com/in/donfack-owen-3873b223b/"
                   target="_blank"
                   rel="noopener noreferrer"
                   class="text-sm font-semibold text-slate-500 transition
                          hover:text-indigo-600">
                    LinkedIn
                </a>

                <a href="mailto:steviewamba14@gmail.com"
                   class="text-sm font-semibold text-slate-500 transition
                          hover:text-indigo-600">
                    Email
                </a>

            </div>


            <p class="text-xs text-slate-400">
                © {{ date('Y') }} Stevie Owen. All rights reserved.
            </p>

        </div>

    </footer>

</body>
</html>
