@php
    $defaultPrice = '$12.345';

    $menuSections = [
        [
            'id' => 'tablas',
            'title' => 'Tablas',
            'subtitle' => 'Para compartir al centro',
            'image' => 'tabla.png',
            'items' => [
                ['name' => 'Tinta & Tonic', 'description' => 'Finos cortes de salmón curado en cítricos, cortes de prosciutto, brochetas de filete, chorizo al vino tinto, tocino grillado, queso camembert con mermelada pimentón, frutas de estación, mix de aceitunas, tostadas y chip de papa camote. Acompañada de salsa cerveza negra.', 'price' => '$29.990'],
                ['name' => 'Rincón del chef', 'description' => 'Pinzas de jaiba, filete al vino tinto, camarones apanados, bruschettas de jamón serrano y queso crema, aceitunas, cubos de queso al olivo y romero, acompañada de mix de frutos secos.', 'price' => '$27.990'],
                ['name' => 'Sabores del mundo', 'description' => 'Pinzas de jaiba flambeadas al coñac, trozos de filete saltado, cóctel de camarones estilo peruano, gyosas de cerdo, cremoso champiñón con chorizo. Selección de quesos saborizados y frutas de estación.', 'price' => '$27.990'],
                ['name' => 'Mediterránea', 'description' => 'Camarones al ajillo, chorizo al vino tinto, selección de quesos saborizados, jamón serrano, tomates cherry saborizados, chip de papas camote, mix de frutos secos y frutas de estación.', 'price' => '$25.990'],
                ['name' => 'Crunch', 'description' => 'Camarones apanados, chicken fingers, onion rings y mozzarella sticks, acompañada de salsa barbecue y cheddar tocino.', 'price' => '$23.990'],
                ['name' => 'Chicken chips', 'description' => 'Quesadillas de pollo, brochetas de pollo pimentón, chicken fingers, onion rings y chip de papa camote.', 'price' => '$21.990'],
                ['name' => 'Huerta gourmet', 'description' => 'Cremoso caliente de champiñón y cebolla caramelizada, brochetas de queso con tomate cherry, hummus de garbanzo con toques de nuez y menta, chip de papas camote y selección de frutas de estación.', 'price' => '$16.990'],
            ],
        ],
        [
            'id' => 'del-mar',
            'title' => 'Del mar',
            'subtitle' => 'Productos marinos y tostadas',
            'image' => 'del mar.jpg',
            'items' => [
                ['name' => 'Ostión a la roquefeler', 'description' => 'Ostión media concha con tocino al licor de anís, finalizado con gratín de queso parmesano y toques de perejil fresco.', 'price' => '$17.490'],
                ['name' => 'Tataki Pacífico', 'description' => 'Atún sellado en costra de sésamo con mousse de palta, acompañado de tostadas.', 'price' => '$13.990'],
                ['name' => 'Tiradito austral', 'description' => 'Láminas de salmón curado, coronadas con vinagreta de maracuyá y menta, queso parmesano y alcaparras, junto a tostadas artesanales.', 'price' => '$10.990'],
                ['name' => 'Jaiba fundente', 'description' => 'Cremoso caliente de jaiba terminado con queso gratinado, toques de ciboulette y tostadas.', 'price' => '$11.490'],
                ['name' => 'Costa suprema', 'description' => 'Machas a la parmesana y langostinos, acompañadas de salsa verde.', 'price' => '$16.990'],
                ['name' => 'Tartar de atún y salmón', 'description' => 'Atún y salmón, aderezado con aceite de sésamo, alcaparras, pepinillo dill, limón y un toque sutil de picante y cebollín. Servido sobre una cama de palta y tostadas crujientes.', 'price' => '$11.990'],
            ],
        ],
        [
            'id' => 'seleccion-grill',
            'title' => 'Selección Grill',
            'subtitle' => 'Plancha, parrilla y sabores calientes',
            'image' => 'grill.png',
            'items' => [
                ['name' => 'Entrañable', 'description' => 'Entraña al punto, acompañada de tomate fresco al mortero, queso campestre untable, reducción de vino tinto con romero, uvas y tostadas crujientes.', 'price' => '$16.990'],
                ['name' => 'Trilogía de gyosas', 'description' => 'Selección de gyosas japonesas cocidas al vapor.', 'price' => '$9.990'],
                ['name' => 'Fundida campestre', 'description' => 'Fondue de queso cremoso en preparación italiana con chorizo y toques de orégano, acompañado de tostadas.', 'price' => '$13.990'],
                ['name' => 'Butifarra del chef', 'description' => 'Butifarra grillada con salsa de queso fundido y toques de perejil, acompañado de tomate fresco al mortero y tostadas.', 'price' => '$15.490'],
                ['name' => 'Pichanga especiada', 'description' => 'Pinchos de camarón al pilpil, mix de aceitunas, mini salamini, quesos saborizados, pepinillo dill. Terminada en toques de aceite especiado.', 'price' => '$11.990'],
            ],
        ],
        [
            'id' => 'ceviches',
            'title' => 'Ceviches',
            'subtitle' => 'Frescos, cítricos y con tostadas',
            'image' => 'ceviches.jpg',
            'items' => [
                ['name' => 'Ceviche verde', 'description' => 'Champiñón, palta, palmitos, choclo peruano, mix de pimentones, cebolla morada, cilantro y leche de tigre vegetariana. Acompañado de tostadas.', 'price' => '$10.990'],
                ['name' => 'Ceviche salmón', 'description' => 'Salmón fresco, palta, choclo peruano, mix de pimentones, cebolla morada, cilantro y leche de tigre. Acompañado de tostadas.', 'price' => '$13.990'],
                ['name' => 'Trilogía del Pacífico', 'description' => 'Ceviche de atún, ceviche camarón y ceviche salmón marinados en leche de tigre. Acompañados de tostadas.', 'price' => '$15.990'],
            ],
        ],
        [
            'id' => 'papas',
            'title' => 'Papas de autor',
            'subtitle' => 'Papas fritas artesanales con topping',
            'image' => 'papas de autor.jpg',
            'items' => [
                ['name' => 'Fundición tonic', 'description' => 'Filete de res, chorizo, pollo grillado, champiñones y pimentones asados, mozzarella fundida y cebolla caramelizada, sobre papas fritas en gajos, acompañada de salsa.', 'price' => '$20.990'],
                ['name' => 'Res peruana', 'description' => 'Filete de res sellado, tomate, cebolla morada, cebollín, sobre papas fritas en gajos, acompañada de salsas.', 'price' => '$16.990'],
            ],
        ],
        [
            'id' => 'quesadillas',
            'title' => 'Quesadillas',
            'subtitle' => 'Con pico de gallo y salsa ácida',
            'image' => 'quesadillas.jpg',
            'items' => [
                ['name' => 'Pollo pimentón', 'description' => 'Salteado de pollo, pimentón, queso fundido y cebolla caramelizada, acompañado de pico de gallo y salsa ácida.', 'price' => '$9.990'],
                ['name' => 'Res & tocino', 'description' => 'Salteado de res con tocino crocante, pimentón y queso fundido, acompañado de pico de gallo y salsa ácida.', 'price' => '$10.990'],
                ['name' => 'Huerta asada', 'description' => 'Salteado de champiñón, pimentón, cebolla crispy, queso fundido y cebolla caramelizada, acompañado de pico de gallo y salsa ácida.', 'price' => '$9.990'],
            ],
        ],
        [
            'id' => 'sandwich',
            'title' => 'Sandwich',
            'subtitle' => 'Pan ciabatta o focaccia',
            'image' => 'sandwich.jpg',
            'items' => [
                ['name' => 'American mechada', 'description' => 'Carne mechada, queso cheddar, aros de cebolla, pepinillo dill y salsa de la casa.', 'price' => '$9.990'],
                ['name' => 'Chicken grill', 'description' => 'Pollo grillado, queso, pimentón asado, champiñón, con mayonesa de aceto balsámico.', 'price' => '$8.990'],
                ['name' => 'Mechada tocino', 'description' => 'Carne mechada, tocino, palta y mayonesa.', 'price' => '$9.990'],
            ],
        ],
        [
            'id' => 'postres',
            'title' => 'Postres',
            'subtitle' => 'Final dulce',
            'image' => 'postres.jpg',
            'items' => [
                ['name' => 'Brownie con helado', 'description' => 'Elaborado artesanalmente con una textura suave y un delicado toque a cacao, acompañado de helado.', 'price' => '$4.990'],
                ['name' => 'Volcán de chocolate con helado', 'description' => 'Bizcocho de chocolate con centro de chocolate fundido decorado con salsa de vino tinto y helado.', 'price' => '$6.990'],
                ['name' => 'Suspiro limeño con helado', 'description' => 'Crema de manjar coronado con merengue italiano y un delicado toque de canela.', 'price' => '$5.490'],
                ['name' => 'Celestino con helado', 'description' => 'Celestinos con helado de vainilla y salsa de frutos rojos.', 'price' => '$5.990'],
            ],
        ],
        [
            'id' => 'cafe-te',
            'title' => 'Café y Té',
            'subtitle' => 'Para cerrar la mesa',
            'image' => 'cafe y te.jpg',
            'items' => [
                ['name' => 'Café', 'description' => '', 'price' => '$2.500'],
                ['name' => 'Té variedades', 'description' => '', 'price' => '$1.990'],
                ['name' => 'Infusión menta limón', 'description' => '', 'price' => '$1.990'],
            ],
        ],
        [
            'id' => 'jugos-bebidas',
            'title' => 'Jugos & Bebidas',
            'subtitle' => 'Jugos, limonadas y bebidas',
            'image' => 'jugos y bebidas.jpg',
            'items' => [
                ['name' => 'Jugos', 'description' => 'Frambuesa, piña, mango, maracuyá.', 'price' => '$3.990'],
                ['name' => 'Clásica', 'description' => 'Limonada.', 'price' => '$3.990'],
                ['name' => 'Menta Jengibre', 'description' => 'Limonada.', 'price' => '$4.900'],
                ['name' => 'Menta Frambuesa', 'description' => 'Limonada.', 'price' => '$4.990'],
                ['name' => 'Bebida', 'description' => '350cc.', 'price' => '$2.700'],
                ['name' => 'Agua mineral con gas', 'description' => '', 'price' => '$2.890'],
                ['name' => 'Agua mineral sin gas', 'description' => '', 'price' => '$2.890'],
                ['name' => 'Red Bull variedades', 'description' => '', 'price' => '$3.500'],
                ['name' => 'Fentimans variedades', 'description' => '', 'price' => '$3.800'],
            ],
        ],
        [
            'id' => 'promociones',
            'title' => 'Promociones',
            'subtitle' => 'Precios especiales 2x',
            'image' => 'tragos y cocteleria.jpg',
            'items' => [
                ['name' => 'Mojito cubano', 'description' => 'Limón, syrup simple, menta, ron Maddero blanco, agua soda.', 'price' => '2x $8.000'],
                ['name' => 'Ramazzotti Spritz', 'description' => 'Ramazzotti Rosato, espumante, agua soda.', 'price' => '2x $9.000'],
                ['name' => 'Alto del Carmen 35', 'description' => '', 'price' => '2x $7.000'],
                ['name' => 'Mistral 35', 'description' => '', 'price' => '2x $7.000'],
                ['name' => 'Mistral Nobel variedades', 'description' => '', 'price' => '2x $10.000'],
                ['name' => 'Fernet Branca', 'description' => '', 'price' => '2x $11.000'],
            ],
        ],
        [
            'id' => 'cocteleria',
            'title' => 'Cóctelería',
            'subtitle' => 'Clásicos, sours, spritz y gin',
            'image' => 'tragos y cocteleria.jpg',
            'items' => [
                ['name' => 'Gin Tonic', 'description' => 'Gin, bebida tónica, toque cítrico.', 'price' => '$5.990'],
                ['name' => 'Tropical Gin', 'description' => 'Gin, Red Bull Yellow.', 'price' => '$6.500'],
                ['name' => 'Pisco Sour nacional', 'description' => 'Limón, syrup simple, pisco artesano, Angostura bitter.', 'price' => '$5.450'],
                ['name' => 'Pisco Sour peruano', 'description' => 'Lima, syrup simple, pisco gran cruz, Angostura bitter.', 'price' => '$7.990'],
                ['name' => 'Mojito Sabores', 'description' => 'Limón, syrup simple, menta, ron Maddero blanco, pulpa a elección, agua soda.', 'price' => '$6.990'],
                ['name' => 'Moscow mule', 'description' => 'Lima, syrup simple, vodka Smirnoff, ginger beer.', 'price' => '$6.800'],
                ['name' => 'Caipiriña', 'description' => 'Lima en cuartos, syrup simple, Cachaça 51.', 'price' => '$5.450'],
                ['name' => 'Mint julep', 'description' => 'Menta, lima, demerara syrup, whisky Bulleit bourbon.', 'price' => '$7.800'],
                ['name' => 'Margarita', 'description' => 'Lima, triple sec, tequila Olmeca blanco.', 'price' => '$6.800'],
                ['name' => 'Tom Collins', 'description' => 'Limón, syrup simple, gin Gordons, agua soda.', 'price' => '$6.990'],
                ['name' => 'White Russian', 'description' => 'Crema de leche, syrup simple, licor Kahlua coffee, vodka Smirnoff.', 'price' => '$6.800'],
                ['name' => 'Black Russian', 'description' => 'Licor Kahlua coffee, vodka Smirnoff.', 'price' => '$5.800'],
                ['name' => 'Cosmopolitan', 'description' => 'Lima, vodka Absolut citron, triple sec, cranberry.', 'price' => '$6.990'],
                ['name' => 'Bramble', 'description' => 'Gin Tanqueray Royale, moras, lima, syrup simple.', 'price' => '$7.990'],
                ['name' => 'Pornstar Martini', 'description' => 'Vodka Stoli vainilla, limón, maracuyá, syrup simple, licor 43.', 'price' => '$7.990'],
                ['name' => 'Negroni', 'description' => 'Gin Gordons, vermouth Rosso Cinzano, Campari.', 'price' => '$6.800'],
                ['name' => 'Manhattan', 'description' => 'Vermouth rosso, bourbon whisky Bulleit, Angostura bitter, cherry.', 'price' => '$7.890'],
                ['name' => 'Martini Dry', 'description' => 'Vodka Smirnoff, vermouth dry, aceituna sevillana.', 'price' => '$6.990'],
                ['name' => 'Old Fashion', 'description' => 'Bulleit bourbon whisky, demerara syrup, Angostura bitter, soda.', 'price' => '$7.890'],
                ['name' => 'Negroni Sbagliato', 'description' => 'Campari, vermouth rosso Cinzano, espumante.', 'price' => '$6.700'],
                ['name' => 'Rusty Nail', 'description' => 'Johnnie Walker Red, Drambuie.', 'price' => '$6.750'],
                ['name' => 'Espresso Martini', 'description' => 'Vodka Smirnoff, licor Kahlua, espresso, syrup simple.', 'price' => '$7.680'],
                ['name' => 'Bloody Mary', 'description' => 'Vodka Smirnoff, jugo de tomate, limón, sal, pimienta, salsa inglesa, Tabasco, aceitunas sevillanas, apio.', 'price' => '$7.980'],
                ['name' => 'Ramazzotti Violetto Tonic', 'description' => 'Ramazzotti Violetto, tónica, romero, arándanos.', 'price' => '$6.500'],
                ['name' => 'Aperol Spritz', 'description' => 'Aperol, espumante, agua soda, naranja.', 'price' => '$6.800'],
            ],
        ],
        [
            'id' => 'whisky',
            'title' => 'Whisky',
            'subtitle' => 'Destilados',
            'image' => 'whisky.png',
            'items' => [
                ['name' => 'Johnnie Walker Red', 'description' => '', 'price' => '$7.990'],
                ['name' => 'Johnnie Walker Black', 'description' => '', 'price' => '$9.990'],
                ['name' => 'Johnnie Walker Double Black', 'description' => '', 'price' => '$10.990'],
                ['name' => 'Bulleit Bourbon', 'description' => '', 'price' => '$9.990'],
                ['name' => 'Chivas Regal 12', 'description' => '', 'price' => '$9.990'],
                ['name' => 'Chivas Regal 18', 'description' => '', 'price' => '$15.990'],
                ['name' => 'Jameson', 'description' => '', 'price' => '$8.990'],
                ['name' => 'Jack Daniels Gentleman', 'description' => '', 'price' => '$11.990'],
                ['name' => 'Jack Daniels N7', 'description' => '', 'price' => '$9.900'],
                ['name' => 'Jack Daniels Apple', 'description' => '', 'price' => '$9.500'],
                ['name' => 'Jack Daniels Fire', 'description' => '', 'price' => '$9.500'],
                ['name' => 'Jack Daniels Honey', 'description' => '', 'price' => '$9.500'],
            ],
        ],
        [
            'id' => 'licores',
            'title' => 'Licores',
            'subtitle' => 'Licores y bajativos',
            'image' => 'licores.png',
            'items' => [
                ['name' => 'Jagermeister', 'description' => '', 'price' => '$7.990'],
                ['name' => 'Baileys', 'description' => '', 'price' => '$7.800'],
                ['name' => 'Kahlua', 'description' => '', 'price' => '$6.900'],
                ['name' => 'Drambuie', 'description' => '', 'price' => '$9.200'],
                ['name' => 'Frangelico', 'description' => '', 'price' => '$7.450'],
                ['name' => 'Licor 43', 'description' => '', 'price' => '$7.990'],
                ['name' => 'Bols Flor de Saúco', 'description' => '', 'price' => '$6.600'],
                ['name' => 'Mitjans Triple Sec', 'description' => '', 'price' => '$6.600'],
                ['name' => 'Mitjans Amaretto', 'description' => '', 'price' => '$6.600'],
                ['name' => 'Mitjans Licor de Café', 'description' => '', 'price' => '$6.600'],
                ['name' => 'Mitjans Licor de Cherry', 'description' => '', 'price' => '$6.600'],
            ],
        ],
        [
            'id' => 'tragos-autor',
            'title' => 'Tragos de autor',
            'subtitle' => 'Cócteles de la casa',
            'image' => 'tragos de autor.png',
            'items' => [
                ['name' => 'Violette', 'description' => 'Un cóctel clarificado de apariencia cristalina a base de frutos tropicales. Las notas de Tanqueray Royale, maracuyá y menta se funden en una experiencia sedosa, fresca y aromática.', 'price' => '$9.990'],
                ['name' => 'Grizzly', 'description' => 'La calidez del ron y el pisco añejado en barrica se encuentra con la dulzura del mango y una delicada espuma de piña y jengibre. Intenso, exótico y con un final especiado.', 'price' => '$9.990'],
                ['name' => 'Entre tintas', 'description' => 'Una combinación fresca y herbácea donde el tequila se une a un shrub de vino tinto y boldo, equilibrado con toques a flor de saúco y tintes cítricos.', 'price' => '$8.990'],
                ['name' => 'Tinto & Tonic - Sangria de la casa', 'description' => 'Vino tinto con dulzor tropical de mango y toque especiado de Fireball, refrescado por cítricos y fruta fresca.', 'price' => '$8.990'],
                ['name' => 'La tonica (mocktail)', 'description' => 'Aperitivo sin alcohol de inspiración mediterránea con Aperol sin alcohol, shrub de pomelo y laurel, jugo de naranja, limón, tónica y solución salina.', 'price' => '$7.990'],
                ['name' => 'N3 (mocktail)', 'description' => 'Creación sin alcohol con Ramazzotti sin alcohol, infusión fría de jazmín y boldo, jugo de pera y espumante sin alcohol.', 'price' => '$8.990'],
            ],
        ],
        [
            'id' => 'piscos',
            'title' => 'Piscos',
            'subtitle' => 'Destilados',
            'image' => 'pisco.png',
            'items' => [
                ['name' => 'Alto del Carmen doble destilado 40', 'description' => '', 'price' => '$7.890'],
                ['name' => 'Alto del Carmen 40', 'description' => '', 'price' => '$7.800'],
                ['name' => 'Mistral Gran Nobel 40', 'description' => '', 'price' => '$14.990'],
            ],
        ],
        [
            'id' => 'gin',
            'title' => 'Gin',
            'subtitle' => 'Destilados',
            'image' => 'gin.png',
            'items' => [
                ['name' => 'Tanqueray London Dry', 'description' => '', 'price' => '$8.900'],
                ['name' => 'Tanqueray Ten', 'description' => '', 'price' => '$10.990'],
                ['name' => 'Tanqueray Royale', 'description' => '', 'price' => '$9.990'],
                ['name' => 'Beefeater London Dry', 'description' => '', 'price' => '$8.990'],
                ['name' => 'Beefeater Pink', 'description' => '', 'price' => '$8.990'],
                ['name' => 'Beefeater 24', 'description' => '', 'price' => '$11.990'],
                ['name' => 'Hendricks', 'description' => '', 'price' => '$9.990'],
            ],
        ],
        [
            'id' => 'ron',
            'title' => 'Ron',
            'subtitle' => 'Destilados',
            'image' => 'ron.png',
            'items' => [
                ['name' => 'Maddero Dorado', 'description' => '', 'price' => '$5.200'],
                ['name' => 'Maddero Blanco', 'description' => '', 'price' => '$5.200'],
                ['name' => 'Havana Club 3 años', 'description' => '', 'price' => '$5.990'],
                ['name' => 'Havana Club Añejo 7 años', 'description' => '', 'price' => '$9.990'],
            ],
        ],
        [
            'id' => 'vodka',
            'title' => 'Vodka',
            'subtitle' => 'Destilados',
            'image' => 'vodka.png',
            'items' => [
                ['name' => 'Smirnoff', 'description' => '', 'price' => '$6.500'],
                ['name' => 'Absolut Blue', 'description' => '', 'price' => '$7.800'],
                ['name' => 'Absolut Citron', 'description' => '', 'price' => '$7.800'],
                ['name' => 'Absolut Raspberries', 'description' => '', 'price' => '$7.800'],
                ['name' => 'Stoli', 'description' => '', 'price' => '$7.900'],
            ],
        ],
        [
            'id' => 'bitter',
            'title' => 'Bitter',
            'subtitle' => 'Destilados',
            'image' => 'bitter.png',
            'items' => [
                ['name' => 'Campari', 'description' => '', 'price' => '$7.950'],
            ],
        ],
        [
            'id' => 'tequila',
            'title' => 'Tequila',
            'subtitle' => 'Destilados',
            'image' => 'tequila.png',
            'items' => [
                ['name' => 'Don Julio Blanco', 'description' => '', 'price' => '$8.990'],
                ['name' => 'Don Julio Reposado', 'description' => '', 'price' => '$9.990'],
                ['name' => 'Olmeca Blanco', 'description' => '', 'price' => '$6.900'],
                ['name' => 'El Jimador Blanco', 'description' => '', 'price' => '$7.990'],
                ['name' => 'El Jimador Reposado', 'description' => '', 'price' => '$7.990'],
            ],
        ],
        [
            'id' => 'vermouth',
            'title' => 'Vermouth',
            'subtitle' => 'Destilados',
            'image' => 'Vermouth.png',
            'items' => [
                ['name' => 'Campano Rosso', 'description' => '', 'price' => '$6.890'],
                ['name' => 'Campano Blanco', 'description' => '', 'price' => '$6.890'],
                ['name' => 'Martini Extra Dry', 'description' => '', 'price' => '$5.990'],
            ],
        ],
        [
            'id' => 'cervezas',
            'title' => 'Cervezas',
            'subtitle' => 'Botellas, schop y agregados',
            'image' => 'cervezas.png',
            'items' => [
                ['name' => 'Heineken sin alcohol', 'description' => '', 'price' => '$3.800'],
                ['name' => 'Corona Extra', 'description' => '', 'price' => '$3.800'],
                ['name' => 'Corona Extra sin alcohol', 'description' => '', 'price' => '$3.400'],
                ['name' => 'Stella Artois', 'description' => '', 'price' => '$3.850'],
                ['name' => 'Kunstmann miel', 'description' => '', 'price' => '$3.900'],
                ['name' => 'Kunstmann Arándano', 'description' => '', 'price' => '$3.900'],
                ['name' => 'Kunstmann sin alcohol', 'description' => '', 'price' => '$3.900'],
                ['name' => 'Schop Kunstmann Torobayo 500cc', 'description' => '', 'price' => '$4.990'],
                ['name' => 'Schop Austral Calafate 500cc', 'description' => '', 'price' => '$4.990'],
                ['name' => 'Schop Calafate 500cc', 'description' => '', 'price' => '$5.700'],
                ['name' => 'Schop Stout 500cc', 'description' => '', 'price' => '$5.700'],
                ['name' => 'Schop Ambar 500cc', 'description' => '', 'price' => '$6.500'],
                ['name' => 'Chelada', 'description' => '', 'price' => '$1.200'],
                ['name' => 'Michelada', 'description' => '', 'price' => '$1.990'],
                ['name' => 'Michelada completa', 'description' => '', 'price' => '$2.500'],
                ['name' => 'Bloody chelada', 'description' => '', 'price' => '$2.990'],
            ],
        ],
    ];
@endphp

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Carta completa de Tinta & Tonic Bar de Tapas con tablas españolas, tapas, cóctelería y precios.">

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

                    <a href="#reservas" class="inline-flex h-10 shrink-0 items-center justify-center rounded-lg bg-[#111142] px-4 text-sm font-bold text-white transition hover:bg-[#111142]">
                        Reservar
                    </a>
                </div>

                <nav class="hidden border-t border-white/10 bg-[#525453] md:block" aria-label="Secciones de la carta">
                    <div class="mx-auto max-w-7xl overflow-x-auto px-5 py-3 sm:px-8">
                        <div class="flex w-max gap-2">
                            @foreach ($menuSections as $section)
                                <a href="#{{ $section['id'] }}" class="rounded-lg border border-white/12 bg-white/8 px-4 py-2 text-sm font-semibold text-white/76 transition hover:border-white/40 hover:bg-[#111142] hover:text-white">
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
                        <a href="#{{ $section['id'] }}" class="rounded-lg border border-white/12 bg-white/8 px-2 py-3 text-center text-[11px] font-bold leading-tight text-white/78 transition hover:border-white/36 hover:bg-[#111142] hover:text-white">
                            {{ $section['title'] }}
                        </a>
                    @endforeach
                </div>
            </nav>

            <main id="inicio" class="pl-24 md:pl-0">
                <section class="relative min-h-screen overflow-hidden bg-[#000000]">
                    <img
                        data-hero-cover
                        src="{{ Vite::asset('resources/img/portada.png') }}"
                        alt="Portada de Tinta & Tonic"
                        class="absolute inset-0 h-full w-full object-cover transition-opacity duration-200"
                        style="will-change: opacity;"
                    >
                    <div class="absolute inset-0 bg-[linear-gradient(90deg,rgba(0,0,0,.88)_0%,rgba(47,47,43,.72)_48%,rgba(0,58,134,.48)_100%)]"></div>
                    <div class="pointer-events-none absolute inset-x-0 bottom-0 h-56 bg-[linear-gradient(180deg,rgba(82,84,83,0)_0%,rgba(82,84,83,.70)_58%,#525453_100%)]"></div>
                    <div class="absolute inset-x-0 top-0 h-2 bg-[#111142]"></div>

                    <div class="relative mx-auto flex min-h-screen max-w-7xl items-start px-5 pt-[calc(5rem+1cm)] pb-28 sm:px-8 md:pt-[calc(10rem+1cm)] md:pb-32">
                        <div class="mx-auto max-w-4xl text-center">
                            
                            <div class="mx-auto w-full max-w-[520px] rounded-3xl bg-[#000000]/50 p-6 sm:p-8">
                                <h1 class="text-white">
                                    <img src="{{ Vite::asset('resources/img/tinta-tonic-logo2.png') }}" alt="Tinta &amp; Tonic" class="w-full object-contain" />
                                    <span class="sr-only">Tinta &amp; Tonic</span>
                                </h1>
                            </div>
                            <p class="mx-auto mt-6 max-w-2xl text-lg leading-8 text-white/78 sm:text-xl">
                                Una carta para compartir, una barra con carácter y una noche que empieza con tapas y termina en sobremesa.
                            </p>

                            <div class="mt-10 flex flex-col justify-center gap-3 sm:flex-row">
                                <a href="#tablas" class="inline-flex h-12 items-center justify-center rounded-lg bg-white px-6 text-sm font-bold text-black transition hover:bg-white/88">
                                    Ver carta
                                </a>
                                <a href="#reservas" class="inline-flex h-12 items-center justify-center rounded-lg border border-white/24 bg-white/8 px-6 text-sm font-bold text-white transition hover:bg-[#111142]">
                                    Reservar
                                </a>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="bg-[#525453]">
                    <div class="mx-auto max-w-7xl px-5 pt-0 pb-10 sm:px-8 md:pt-0 md:pb-16 lg:pb-20">
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
                                                <div class="mb-5 h-1 w-24 rounded-full bg-[#111142]"></div>
                                                <p class="text-sm font-bold uppercase tracking-normal text-white/54">{{ $section['subtitle'] }}</p>
                                                <h2 class="mt-2 font-['Playfair_Display'] text-4xl font-bold tracking-normal text-white sm:text-5xl">{{ $section['title'] }}</h2>
                                            </div>

                                            <div class="divide-y divide-white/10 bg-[#2f2f2b]">
                                                @foreach ($section['items'] as $item)
                                                    <article class="p-4 sm:p-6">
                                                        <div class="flex items-start justify-between gap-4">
                                                            <h3 class="font-['Playfair_Display'] text-lg font-bold leading-tight text-white sm:text-2xl">{{ $item['name'] }}</h3>
                                                            <p class="shrink-0 font-['Playfair_Display'] text-lg font-bold leading-tight text-white sm:text-2xl">
                                                                {{ $item['price'] ?? $defaultPrice }}
                                                                @isset($item['promo_price'])
                                                                    <span class="block text-xs leading-5 text-white/66 sm:text-sm">{{ $item['promo_price'] }}</span>
                                                                @endisset
                                                            </p>
                                                        </div>
                                                        @if ($item['description'] !== '')
                                                            <p class="mt-1 max-w-3xl text-xs leading-5 text-white/66 sm:mt-2 sm:text-sm sm:leading-6">{{ $item['description'] }}</p>
                                                        @endif
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

                <section id="reservas" class="relative overflow-hidden bg-[#2f2f2b] text-white">
                    <div class="pointer-events-none absolute inset-x-0 top-0" style="height: 10rem; background: linear-gradient(180deg, #525453 0%, rgba(82, 84, 83, .62) 34%, rgba(47, 47, 43, .86) 72%, #2f2f2b 100%);"></div>
                    <div class="relative mx-auto grid max-w-7xl gap-10 px-5 py-16 sm:px-8 lg:grid-cols-[1fr_.8fr] lg:py-24">
                        <div>
                            <p class="text-sm font-bold uppercase tracking-normal text-white/62">Reservas</p>
                            <h2 class="mt-3 font-['Playfair_Display'] text-4xl font-bold tracking-normal sm:text-6xl">Aquí­ nacen las mejores historias, entre copas, tapas y buena compañí­a.</h2>
                            <p class="mt-5 max-w-2xl text-lg leading-8 text-white/70">
                                Reserva para una tabla, una ronda de cócteles o una noche completa. Tinta & Tonic Bar de Tapas está hecho para compartir.
                            </p>
                        </div>

                        <div class="rounded-lg border border-white/14 bg-[#525453] p-6 text-white">
                            <p class="font-['Playfair_Display'] text-3xl font-bold">Tinta &amp; Tonic</p>
                            <div class="mt-6 grid gap-4 text-sm text-white/76">
                                <p><span class="font-semibold text-white">Instagram:</span> @tinta_tonic</p>
                                <p><span class="font-semibold text-white">Teléfono:</span> +56 9 0000 0000</p>
                                <p><span class="font-semibold text-white">Dirección:</span> Av. Pablo Neruda 1694 - Témuco</p>
                                <p><span class="font-semibold text-white">Web:</span> www.tintatonic.cl</p>
                            </div>
                            <a href="https://wa.me/56900000000" target="_blank" rel="noopener noreferrer" class="mt-7 inline-flex h-12 w-full items-center justify-center gap-2 rounded-lg bg-[#25D366] px-6 text-sm font-bold text-white transition hover:bg-[#1ebe5d]">
                                <svg class="h-5 w-5" viewBox="0 0 32 32" aria-hidden="true" fill="currentColor">
                                    <path d="M16.01 3.2C8.95 3.2 3.2 8.94 3.2 16c0 2.26.59 4.47 1.72 6.42L3.1 29l6.74-1.77A12.7 12.7 0 0 0 16.01 28.8c7.06 0 12.79-5.74 12.79-12.8S23.07 3.2 16.01 3.2Zm0 23.42c-1.98 0-3.9-.54-5.58-1.56l-.4-.24-4 1.05 1.07-3.9-.26-.4A10.57 10.57 0 0 1 5.38 16c0-5.86 4.77-10.62 10.63-10.62 5.85 0 10.61 4.76 10.61 10.62S21.86 26.62 16.01 26.62Zm5.82-7.96c-.32-.16-1.9-.94-2.2-1.04-.3-.11-.52-.16-.74.16-.21.32-.84 1.04-1.03 1.25-.19.21-.38.24-.7.08-.32-.16-1.36-.5-2.58-1.59-.95-.85-1.6-1.9-1.79-2.22-.19-.32-.02-.5.14-.65.15-.14.32-.38.48-.57.16-.19.21-.32.32-.54.11-.21.05-.4-.03-.56-.08-.16-.74-1.78-1.01-2.44-.27-.64-.54-.55-.74-.56h-.63c-.21 0-.56.08-.85.4-.3.32-1.12 1.09-1.12 2.66s1.15 3.09 1.31 3.3c.16.21 2.26 3.45 5.48 4.84.77.33 1.36.53 1.83.68.77.24 1.47.21 2.02.13.62-.09 1.9-.78 2.17-1.53.27-.75.27-1.4.19-1.53-.08-.13-.29-.21-.61-.37Z"/>
                                </svg>
                                WhatsApp
                            </a>
                        </div>
                    </div>
                </section>
            </main>
        </div>

        <script>
            (() => {
                const heroCover = document.querySelector('[data-hero-cover]');
                const heroSection = heroCover?.closest('section');

                if (!heroCover || !heroSection) {
                    return;
                }

                const fadeCover = () => {
                    const heroHeight = heroSection.offsetHeight || window.innerHeight;
                    const progress = Math.min(Math.max(window.scrollY / (heroHeight * 0.72), 0), 1);

                    heroCover.style.opacity = Math.max(1 - progress, 0.08).toString();
                };

                fadeCover();
                window.addEventListener('scroll', fadeCover, { passive: true });
                window.addEventListener('resize', fadeCover);
            })();
        </script>
    </body>
</html>
