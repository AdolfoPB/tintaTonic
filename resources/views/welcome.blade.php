@php
    $defaultPrice = '$12.345';

    $menuSections = [
        [
            'id' => 'tablas',
            'title' => 'Tablas',
            'subtitle' => 'Para compartir al centro',
            'image' => 'tabla.png',
            'items' => [
                ['name' => 'Tinta & Tonic', 'description' => 'Salmon curado en citricos, cortes de prosciutto, brochetas de res, chorizo al vino tinto, tocino grillado, queso camembert, mermelada pimenton, aceitunas y tostadas.'],
                ['name' => 'Rincon del chef', 'description' => 'Pinzas de jaiba, res al vino tinto, camarones apanados, bruschettas, jamon serrano, queso crema, aceitunas y queso al olivo.'],
                ['name' => 'Sabores del mundo', 'description' => 'Pinzas de jaiba flambeadas al conac, res saltado, caleta de camarones, gyosas de cerdo, cremoso champinon con choricillo y seleccion de quesos.'],
                ['name' => 'Mediterranea', 'description' => 'Camarones al ajillo, chorizo parrillero al vino tinto, quesos saborizados, jamon serrano, tomates cherry, frutos secos y chips de papas.'],
                ['name' => 'Crunch', 'description' => 'Camarones apanados, chicken fingers, onion rings y mozzarella sticks con barbecue ahumada y cheddar tocino.'],
                ['name' => 'Chicken chips', 'description' => 'Quesadillas de pollo, brochetas de pollo pimenton, chicken fingers, onion rings y papas fritas artesanales.'],
                ['name' => 'Huerta gourmet', 'description' => 'Cremoso caliente de champinones, cebolla caramelizada, brochetas de queso con tomate cherry, hummus y frutas de temporada.'],
            ],
        ],
        [
            'id' => 'papas',
            'title' => 'Papas de autor',
            'subtitle' => 'Papas fritas artesanales con topping',
            'image' => 'papas de autor.jpg',
            'items' => [
                ['name' => 'Tinta & Tonic', 'description' => 'Cortes de res, choricillo, pollo grillado, champinones, pimenton, mozzarella fundida y cebolla caramelizada.'],
                ['name' => 'Res peruana', 'description' => 'Cortes de res sellada, cebolla morada, tomate, cebollin y salsas de la casa.'],
            ],
        ],
        [
            'id' => 'del-mar',
            'title' => 'Del mar',
            'subtitle' => 'Productos marinos y tostadas',
            'image' => 'del mar.jpg',
            'items' => [
                ['name' => 'Ostion a la roquefeler', 'description' => 'Ostion cocinado con tocino al licor de anis, gratin de queso parmesano y perejil fresco.'],
                ['name' => 'Tataki Pacifico', 'description' => 'Atun sellado en costra de sesamo con mousse de palta, acompanado de tostadas.'],
                ['name' => 'Tiradito austral', 'description' => 'Laminas de salmon curado con vinagreta maracuya menta, parmesano y alcaparras.'],
                ['name' => 'Jaiba fundente', 'description' => 'Cremoso caliente de jaiba terminado con queso gratinado, ciboulette y tostadas.'],
                ['name' => 'Costa suprema', 'description' => 'Machas a la parmesana y langostinos, acompanadas de salsa verde.'],
            ],
        ],
        [
            'id' => 'ceviches',
            'title' => 'Ceviches',
            'subtitle' => 'Frescos, citricos y con tostadas',
            'image' => 'ceviches.jpg',
            'items' => [
                ['name' => 'Ceviche verde', 'description' => 'Champinones, palta, cebolla morada, mix de pimentones y cilantro, acompanado de tostadas.'],
                ['name' => 'Ceviche salmon', 'description' => 'Salmon fresco, palta, cebolla morada, mix de pimentones y cilantro, acompanado de tostadas.'],
                ['name' => 'Trilogia del Pacifico', 'description' => 'Ceviche de atun, ceviche camaron y ceviche salmon marinados en leche de tigre, con tostadas crujientes.'],
            ],
        ],
        [
            'id' => 'quesadillas',
            'title' => 'Quesadillas',
            'subtitle' => 'Con pico de gallo y salsa acida',
            'image' => 'quesadillas.jpg',
            'items' => [
                ['name' => 'Pollo pimenton', 'description' => 'Pollo salteado, pimenton, queso fundido y cebolla caramelizada.'],
                ['name' => 'Res & tocino', 'description' => 'Res salteada con tocino crocante, pimenton y queso fundido.'],
                ['name' => 'Huerta asada', 'description' => 'Champinon, pimenton, cebolla crispy, queso fundido y cebolla caramelizada.'],
            ],
        ],
        [
            'id' => 'sandwich',
            'title' => 'Sandwich',
            'subtitle' => 'Pan ciabatta o focaccia',
            'image' => 'sandwich.jpg',
            'items' => [
                ['name' => 'American mechada', 'description' => 'Carne mechada, queso cheddar, aros de cebolla, pepinillo dill y salsa de la casa.'],
                ['name' => 'Chicken grill', 'description' => 'Pollo grillado, champinones salteados, berros y mayonesa de aceto balsamico.'],
                ['name' => 'Mechada chesse', 'description' => 'Carne mechada, queso fundido y salsa de la casa.'],
            ],
        ],
        [
            'id' => 'grill',
            'title' => 'Grill',
            'subtitle' => 'Plancha, parrilla y sabores calientes',
            'image' => 'grill.png',
            'items' => [
                ['name' => 'Entranable', 'description' => 'Entrana al punto con tomate fresco al mortero, queso campestre untable, reduccion de vino tinto con romero, uvas y tostadas.'],
                ['name' => 'Trilogia de gyosas', 'description' => 'Seleccion de gyosas cocidas al vapor: camaron, cerdo y pollo.'],
                ['name' => 'Fundida campestre', 'description' => 'Fondue de queso en preparacion italiana con oregano, chorizo y tostadas.'],
                ['name' => 'Butifarra del chef', 'description' => 'Butifarra grillada con salsa de queso fundido, perejil, tomate fresco y tostadas.'],
                ['name' => 'Pichanga especiada', 'description' => 'Mix de aceitunas, embutido espanol, pinchos de camaron al pilpil, pepinillo dill, tomate deshidratado y quesos.'],
            ],
        ],
        [
            'id' => 'tragos',
            'title' => 'Tragos & Cocteleria',
            'subtitle' => 'Clasicos, sours, spritz y gin',
            'image' => 'tragos y cocteleria.jpg',
            'items' => [
                ['name' => 'Pisco sour peruano', 'description' => 'Clasico sour de barra.'],
                ['name' => 'Pisco sour nacional', 'description' => 'Clasico sour de barra.'],
                ['name' => 'Tom Collins', 'description' => 'Coctel citrico y refrescante.'],
                ['name' => 'Rusty Nail', 'description' => 'Coctel clasico.'],
                ['name' => 'Negroni', 'description' => 'Clasico amargo.'],
                ['name' => 'Negroni Sbagliato', 'description' => 'Version espumante del clasico.'],
                ['name' => 'Dry Martini', 'description' => 'Clasico seco.'],
                ['name' => 'Mojito cubano', 'description' => 'Hierbabuena, lima y ron.'],
                ['name' => 'Mojito cubano sabores', 'description' => 'Mojito con sabores.'],
                ['name' => 'Mint Julep', 'description' => 'Coctel herbal.'],
                ['name' => 'Moscow Mule', 'description' => 'Ginger beer, vodka y lima.'],
                ['name' => 'Margarita', 'description' => 'Tequila, citrico y sal.'],
                ['name' => 'Paloma', 'description' => 'Tequila y pomelo.'],
                ['name' => 'Mezcalita', 'description' => 'Mezcal y citricos.'],
                ['name' => 'Caipirinha', 'description' => 'Cachaza, lima y azucar.'],
                ['name' => 'White Russian', 'description' => 'Coctel cremoso.'],
                ['name' => 'Black Russian', 'description' => 'Vodka y cafe.'],
                ['name' => 'Cosmopolitan', 'description' => 'Vodka, cranberry y citrico.'],
                ['name' => 'Pornstar Martini', 'description' => 'Martini tropical.'],
                ['name' => 'Manhattan', 'description' => 'Whiskey y vermut.'],
                ['name' => 'Old Fashioned', 'description' => 'Whiskey clasico.'],
                ['name' => 'Espresso Martini', 'description' => 'Cafe y vodka.'],
                ['name' => 'Bloody Mary', 'description' => 'Vodka, tomate y especias.'],
                ['name' => 'Ramazzotti Spritz', 'description' => 'Spritz herbal.'],
                ['name' => 'Aperol Spritz', 'description' => 'Spritz italiano.'],
                ['name' => 'Coronadita', 'description' => 'Coctel con cerveza.'],
                ['name' => 'Daikiri sabores', 'description' => 'Daikiri frutal.'],
                ['name' => 'Gin Tonic', 'description' => 'Gin, tonic y botanicos.'],
                ['name' => 'Tropical Gin', 'description' => 'Gin con perfil tropical.'],
                ['name' => 'Clavo oxidado', 'description' => 'Coctel intenso.'],
                ['name' => 'Sangria', 'description' => 'Vino, fruta y frescor.'],
                ['name' => 'Pina colada', 'description' => 'Ron, pina y coco.'],
                ['name' => 'Mojito', 'description' => 'Ron, menta y lima.'],
                ['name' => 'Mojito sabores', 'description' => 'Mojito frutal.'],
            ],
        ],
        [
            'id' => 'jugos-bebidas',
            'title' => 'Jugos & Bebidas',
            'subtitle' => 'Jugos, limonadas y bebidas',
            'image' => 'jugos y bebidas.jpg',
            'items' => [
                ['name' => 'Pina', 'description' => 'Jugo natural.'],
                ['name' => 'Frutilla', 'description' => 'Jugo natural.'],
                ['name' => 'Mango', 'description' => 'Jugo natural.'],
                ['name' => 'Frutos rojos', 'description' => 'Jugo natural.'],
                ['name' => 'Frambuesa', 'description' => 'Jugo natural.'],
                ['name' => 'Limonada jengibre', 'description' => 'Limonada fresca.'],
                ['name' => 'Limonada menta jengibre', 'description' => 'Limonada fresca.'],
                ['name' => 'Limonada sabores', 'description' => 'Limonada de la casa.'],
                ['name' => 'Coca-Cola', 'description' => 'Bebida.'],
                ['name' => 'Sprite', 'description' => 'Bebida.'],
                ['name' => 'Fanta', 'description' => 'Bebida.'],
                ['name' => 'Ginger Ale', 'description' => 'Bebida.'],
                ['name' => 'Agua mineral con gas', 'description' => 'Agua mineral.'],
                ['name' => 'Agua mineral sin gas', 'description' => 'Agua mineral.'],
            ],
        ],
        [
            'id' => 'cafe-te',
            'title' => 'Cafe y Te',
            'subtitle' => 'Para cerrar la mesa',
            'image' => 'cafe y te.jpg',
            'items' => [
                ['name' => 'Americano', 'description' => 'Cafe caliente.'],
                ['name' => 'Te negro', 'description' => 'Infusion clasica.'],
                ['name' => 'Te verde', 'description' => 'Infusion ligera.'],
                ['name' => 'Infusion', 'description' => 'Menta y limon.'],
            ],
        ],
        [
            'id' => 'postres',
            'title' => 'Postres',
            'subtitle' => 'Final dulce',
            'image' => 'postres.jpg',
            'items' => [
                ['name' => 'Brownie chocolate', 'description' => 'Brownie intenso de chocolate.'],
                ['name' => 'Volcan de chocolate', 'description' => 'Bizcocho tibio con centro fundente.'],
                ['name' => 'Suspiro limeno', 'description' => 'Postre clasico suave y dulce.'],
            ],
        ],
    ];
@endphp

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Carta completa de Tinta & Tonic Bar de Tapas con tablas espanolas, tapas, cocteleria y precios.">

        <title>Tinta & Tonic Bar de Tapas</title>

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600,700|playfair-display:600,700,800" rel="stylesheet" />

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="bg-[#525453] font-sans text-[#ffffff] antialiased">
        <div class="min-h-screen bg-[#525453]">
            <header class="fixed inset-x-0 top-0 z-40 border-b border-white/10 bg-[#2f2f2b]/94 text-white shadow-sm backdrop-blur-md">
                <div class="mx-auto flex max-w-7xl items-center justify-between gap-4 px-5 py-3 sm:px-8">
                    <a href="#inicio" class="shrink-0 inline-flex h-full items-center" aria-label="Tinta & Tonic homepage">
                        <img src="{{ Vite::asset('resources/img/tinta-tonic-logo2.png') }}" alt="Tinta & Tonic" class="h-12 sm:h-16 object-contain" />
                        <span class="sr-only">Tinta &amp; Tonic</span>
                    </a>

                    <a href="#reservas" class="inline-flex h-10 shrink-0 items-center justify-center rounded-lg bg-[linear-gradient(90deg,#003a86_0%,#0079b8_48%,#003a86_100%)] px-4 text-sm font-bold text-white transition hover:bg-[linear-gradient(90deg,#003a86_0%,#0079b8_48%,#003a86_100%)]">
                        Reservar
                    </a>
                </div>

                <nav class="hidden border-t border-white/10 bg-[#525453] md:block" aria-label="Secciones de la carta">
                    <div class="mx-auto max-w-7xl overflow-x-auto px-5 py-3 sm:px-8">
                        <div class="flex w-max gap-2">
                            @foreach ($menuSections as $section)
                                <a href="#{{ $section['id'] }}" class="rounded-lg border border-white/12 bg-white/8 px-4 py-2 text-sm font-semibold text-white/76 transition hover:border-white/40 hover:bg-[linear-gradient(90deg,#003a86_0%,#0079b8_48%,#003a86_100%)] hover:text-white">
                                    {{ $section['title'] }}
                                </a>
                            @endforeach
                        </div>
                    </div>
                </nav>
            </header>

            <nav class="fixed bottom-0 left-0 top-[65px] z-30 w-24 overflow-y-auto border-r border-black/10 bg-[#2f2f2b] px-2 py-3 shadow-lg md:hidden" aria-label="Secciones de la carta mobile">
                <div class="grid gap-2">
                    @foreach ($menuSections as $section)
                        <a href="#{{ $section['id'] }}" class="rounded-lg border border-white/12 bg-white/8 px-2 py-3 text-center text-[11px] font-bold leading-tight text-white/78 transition hover:border-white/36 hover:bg-[linear-gradient(90deg,#003a86_0%,#0079b8_48%,#003a86_100%)] hover:text-white">
                            {{ $section['title'] }}
                        </a>
                    @endforeach
                </div>
            </nav>

            <main id="inicio" class="pl-24 md:pl-0">
                <section class="relative min-h-screen overflow-hidden bg-[#000000]">
                    <img
                        src="{{ Vite::asset('resources/img/portada.png') }}"
                        alt="Portada de Tinta & Tonic"
                        class="absolute inset-0 h-full w-full object-cover"
                    >
                    <div class="absolute inset-0 bg-[linear-gradient(90deg,rgba(0,0,0,.88)_0%,rgba(47,47,43,.72)_48%,rgba(0,58,134,.48)_100%)]"></div>
                    <div class="absolute inset-x-0 top-0 h-2 bg-[linear-gradient(90deg,#003a86_0%,#0079b8_48%,#003a86_100%)]"></div>

                    <div class="relative mx-auto flex min-h-screen max-w-7xl items-start px-5 pt-[calc(5rem+1cm)] pb-28 sm:px-8 md:pt-[calc(10rem+1cm)] md:pb-32">
                        <div class="mx-auto max-w-4xl text-center">
                            
                            <div class="mx-auto w-full max-w-[520px] rounded-3xl bg-[#000000]/50 p-6 sm:p-8">
                                <h1 class="text-white">
                                    <img src="{{ Vite::asset('resources/img/tinta-tonic-logo2.png') }}" alt="Tinta &amp; Tonic" class="w-full object-contain" />
                                    <span class="sr-only">Tinta &amp; Tonic</span>
                                </h1>
                            </div>
                            <p class="mx-auto mt-6 max-w-2xl text-lg leading-8 text-white/78 sm:text-xl">
                                Una carta para compartir, una barra con caracter y una noche que empieza con tapas y termina en sobremesa.
                            </p>

                            <div class="mt-10 flex flex-col justify-center gap-3 sm:flex-row">
                                <a href="#tablas" class="inline-flex h-12 items-center justify-center rounded-lg bg-white px-6 text-sm font-bold text-black transition hover:bg-white/88">
                                    Ver carta
                                </a>
                                <a href="#reservas" class="inline-flex h-12 items-center justify-center rounded-lg border border-white/24 bg-white/8 px-6 text-sm font-bold text-white transition hover:bg-[linear-gradient(90deg,#003a86_0%,#0079b8_48%,#003a86_100%)]">
                                    Reservar
                                </a>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="bg-[#525453]">
                    <div class="mx-auto max-w-7xl px-5 py-10 sm:px-8 md:py-16 lg:py-20">
                        <div class="grid gap-8">
                            @foreach ($menuSections as $section)
                                <section id="{{ $section['id'] }}" class="scroll-mt-24 overflow-hidden rounded-lg border border-white/14 bg-[#2f2f2b] shadow-xl shadow-black/20 md:scroll-mt-36">
                                    <div class="grid gap-0 xl:grid-cols-[300px_1fr]">
                                        <figure class="border-b border-white/12 bg-[#000000] p-4 sm:p-6 xl:border-r xl:border-b-0">
                                            <div class="mx-auto grid aspect-[3/2] w-full max-w-[300px] place-items-center overflow-hidden">
                                                <img
                                                    src="{{ Vite::asset('resources/img/'.$section['image']) }}"
                                                    alt="{{ $section['title'] }} de Tinta & Tonic"
                                                    loading="lazy"
                                                    class="h-full w-full object-cover"
                                                    width="300"
                                                    height="200"
                                                >
                                            </div>
                                        </figure>

                                        <div>
                                            <div class="border-b border-white/10 bg-[#2f2f2b] p-6 lg:p-8">
                                                <div class="mb-5 h-1 w-24 rounded-full bg-[linear-gradient(90deg,#003a86_0%,#0079b8_48%,#003a86_100%)]"></div>
                                                <p class="text-sm font-bold uppercase tracking-normal text-white/54">{{ $section['subtitle'] }}</p>
                                                <h2 class="mt-2 font-['Playfair_Display'] text-4xl font-bold tracking-normal text-white sm:text-5xl">{{ $section['title'] }}</h2>
                                            </div>

                                            <div class="divide-y divide-white/10 bg-[#2f2f2b]">
                                                @foreach ($section['items'] as $item)
                                                    <article class="p-4 sm:p-6">
                                                        <div class="flex items-start justify-between gap-4">
                                                            <h3 class="font-['Playfair_Display'] text-lg font-bold leading-tight text-white sm:text-2xl">{{ $item['name'] }}</h3>
                                                            <p class="shrink-0 font-['Playfair_Display'] text-lg font-bold leading-tight text-white sm:text-2xl">{{ $item['price'] ?? $defaultPrice }}</p>
                                                        </div>
                                                        <p class="mt-1 max-w-3xl text-xs leading-5 text-white/66 sm:mt-2 sm:text-sm sm:leading-6">{{ $item['description'] }}</p>
                                                    </article>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            @endforeach
                        </div>
                    </div>
                </section>

                <section id="reservas" class="bg-[#2f2f2b] text-white">
                    <div class="mx-auto grid max-w-7xl gap-10 px-5 py-16 sm:px-8 lg:grid-cols-[1fr_.8fr] lg:py-24">
                        <div>
                            <p class="text-sm font-bold uppercase tracking-normal text-white/62">Reservas</p>
                            <h2 class="mt-3 font-['Playfair_Display'] text-4xl font-bold tracking-normal sm:text-6xl">Trae hambre. Nosotros ponemos la mesa.</h2>
                            <p class="mt-5 max-w-2xl text-lg leading-8 text-white/70">
                                Reserva para una tabla, una ronda de cocteles o una noche completa. Tinta & Tonic Bar de Tapas esta hecho para compartir.
                            </p>
                        </div>

                        <div class="rounded-lg border border-white/14 bg-[#525453] p-6 text-white">
                            <p class="font-['Playfair_Display'] text-3xl font-bold">Tinta &amp; Tonic</p>
                            <div class="mt-6 grid gap-4 text-sm text-white/76">
                                <p><span class="font-semibold text-white">Instagram:</span> @tinta_tonic</p>
                                <p><span class="font-semibold text-white">Telefono:</span> +569 934 894 34</p>
                                <p><span class="font-semibold text-white">Web:</span> www.tintatonic.cl</p>
                            </div>
                            <a href="tel:+56993489434" class="mt-7 inline-flex h-12 w-full items-center justify-center rounded-lg bg-[linear-gradient(90deg,#003a86_0%,#0079b8_48%,#003a86_100%)] px-6 text-sm font-bold text-white transition hover:bg-[linear-gradient(90deg,#003a86_0%,#0079b8_48%,#003a86_100%)]">
                                Llamar
                            </a>
                        </div>
                    </div>
                </section>
            </main>
        </div>
    </body>
</html>
