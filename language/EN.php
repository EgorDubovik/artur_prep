<?php

$_EN = [
	'menu'=>[
		'Menu','About us','Payment','How it works','Price-list','FAQ','Contact us','Sign in'
	],
	'sec1' => [
		'title' => "Reduce shipping costs at 50%",
		'text' => "A full range of warehouse services for sellers on amazon, eBay and other marketplaces",
		'opt1' => "<b>12 miles</b> from biggest Amazon warehouses",
		'opt2' => "Online <b>transportation control</b> service",
		'btn1' => "Contact us",
		'btn2' => "Show price-list"
	],
	'prei'=> [
		'The highest quality of service for large and small businesses',
		'Ready for one-time contracts or long-term cooperation',
		'No "hidden" overpayments. We work only according to the price list',
		'Permanent and high discounts for partners',
		'The location of our warehouses speeds up logistics and reduces costs',
		'We can accept any shipment size at our warehouse'
	],
	'sec2' => [
		'title' => '<span>Just Prep Center</span> — <br> We know how to do our work for you!',
		'text' => "Since 2016, our centers have helped hundreds of merchants across multiple marketplaces to succeed. We offer a <b>full range</b> of warehouse services for Amazon, eBay and other marketplace sellers.
			<br><br>
			Our main warehouse in Baltimore is located close to cargo ports and airports, and only <b>in 12 miles </b> from the largest Amazon warehouses. All this together significantly <b> reduces transportation costs </b>.
			<br><br>
			With our <b> online service </b> you have full control over the preparation and freight of your goods. <b> You sell - We do the rest. </b>",

	],
	'stat' => [
		[
			'num'=>849,
			'text' =>'<b>Incoming orders processed</b>'
		],
		[
			'num'=>1492,
			'text' =>'<b>Parcels</b> <br> <b>sent</b>'
		],
		[
			'num'=>2016,
			'text' =>'<b>Year of foundation</b> <br> <b>Just Prep Center</b>'
		],
		[
			'num'=>1213,
			'text' =>'<b>Pounds</b> <br> <b>transported</b>'
		],
		[
			'num'=>1046,
			'text' =>'<b>Shipments packed</b>'
		],
	],
	'pricelist'=> [
		'title'=>'Price-list',
		'cat'=>[
			'title'=>'Choose category',
			'cat1'=>'Выгрузка',
			'cat2'=>'Склад',
			'cat3'=>'Погрузка'
		],
		'btn_price_pdf' => 'Download price-list in PDF',
		'option'=>[
			[ // Tab number 1 (для Выгрузка)
				['Выгрузка контейнера','$ 200-500','за контейнер',
					'tooltip'=>""
				],
				['LTL (меньше нагрузки на грузовик)','$ 20','за паллет'],
				['Единовременный сбор','$ 3-4','за случай',
					'tooltip'=>'Происходящий или производимый только один раз, сразу. Единовременное пособие. Единовременная выплата. (Малый академический словарь, МАС)'
				],
				['Плата за тяжелую подъемную работу','$ 10','за случай',
					'tooltip'=>'Происходящий или производимый только один раз, сразу. Единовременное пособие. Единовременная выплата. (Малый академический словарь, МАС)'
				],
				['Единовременный сбор','$ 3-4','за случай',
					'tooltip'=>""
				]
			],

			[ // Tab number 2 (Для Склад)
				['Плата за тяжелую подъемную работу','$ 10','за случай',
					'tooltip'=>""
				],
				['Единовременный сбор	','$ 3-4','за паллет'],
				['Единовременный сбор','$ 3-4','за случай',
					'tooltip'=>'Происходящий или производимый только один раз, сразу. Единовременное пособие. Единовременная выплата. (Малый академический словарь, МАС)'
				],
				['Выгрузка контейнера','$ 200-500','за контейнер',
					'tooltip'=>''
				],
				['LTL (меньше нагрузки на грузовик)','$ 20','за паллет',
					'tooltip'=>""
				]

			],

			[ // Tab number 3 (Для Погрузка)
				['Единовременный сбор','$ 3-4','за случай',
					'tooltip'=>'Происходящий или производимый только один раз, сразу. Единовременное пособие. Единовременная выплата. (Малый академический словарь, МАС)'
				],
				['Выгрузка контейнера','$ 200-500','за контейнер',
					'tooltip'=>''
				],
				['Плата за тяжелую подъемную работу','$ 10','за случай',
					'tooltip'=>""
				],
				['Единовременный сбор	','$ 3-4','за паллет'],
				
				
				['LTL (меньше нагрузки на грузовик)','$ 20','за паллет',
					'tooltip'=>""
				]

			]

		]
	],
	'sec3' => [
		'title'=> 'Still have questions?',
		'text'=> 'Fill the form and we will contact you',
		'inputName' => 'Name',
		'inpuPhone' => 'Mobile number',
		'inputError' => 'Filled incorrect',
		'btn' => 'Send',
		'mimiText' => 'By clicking on the button, I agree to the terms of the <a href="#">Privacy policy</a>'
	],
	'sec4' => [
		'title' => 'How it works'
	],
	'sec5' => [
		'form' => [
			'title' => 'Contact us to start partnership',
			'inputEmail' => 'E-mail',
			'inputMes' => 'Message',
			'inputError' => 'Filled incorrect',
			'titleMes' => 'Message topic',
			'options'=> [ // сколько сдесьбудет элементов столько будет в выпадаюшем списке
						'I want to order your services','I want to offer my services','I want to propose other forms of partnership'
						],
			'btn' => 'Send message',
			'policy' => 'By clicking on the button, I agree to the terms of the <a href="#">Privacy policy</a>'
		],
		'qwes' => [
			'title'=>"FAQ",
			'qw' => [
				[ // каждый элемент многомерного массива содержит 2 элемента, вопрос - ответ
					'How fast can you ship my products to Amazon?', // Вопрос
					'It can take anywhere between 5 hours to 72 hours to ship your items to Amazon.' // Ответ
				],
				[
					'Can you ship on pallets to FBA?',
					'Yes. We have a loading dock. If your shipment arrives on non-FBA compliant pallets, plastics, plywood or weak pallets, you will need re-palletizing services'
				],

				[
					'Where are you located?',
					'We currently have two open locations, one in Baltimore MD, and the other in Hollywood FL,(see maps below).'
				],

				[
					'How can i pay for your services?',
					'You can pay your invoice using a credit/debit card, Zelle, PayPall, Payoneer'
				],

				[
					'Do you work with FBM?',
					'Yes, through limited access to "Amazon User-Permissions". we will be able to make your FBM dispatches and keep records. You do not need to do anything except setting User-Permissions.'
				]

			]

		]
	],
	'footer'=>[
		'title'=>'Still have questions? <br>
					Our E-mail waiting for your questions!',
		'inputEmail' => 'Your E-mail',
		'inputError' => 'Filled incorrect',
	],
	'footer2'=>[
		'&copy; 2020 Just Prep Center',
		'Privacy policy',
		'Illustrations <a href="https://stories.freepik.com/people">Freepik Stories</a>',
		'Design created by  <a href="https://www.behance.net/gromova1_10792">Anastasiya Gromova</a>'
	]

];