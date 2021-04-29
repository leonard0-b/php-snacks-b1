<?php

$posts = [
    '10/01/2019' => [
        [
            'title' => 'Post 1',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 1'
        ],
        [
            'title' => 'Post 2',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 2'
        ],
    ],
    '10/02/2019' => [
        [
            'title' => 'Post 3',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 3'
        ]
    ],
    '15/05/2019' => [
        [
            'title' => 'Post 4',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 4'
        ],
        [
            'title' => 'Post 5',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 5'
        ],
        [
            'title' => 'Post 6',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 6'
        ]
    ],
];

var_dump($posts);
//cerco le chiavi dell'array (date)
foreach ($posts as $date => $value) {
		?>
		<div>
			<?php echo $date ?>
		</div>
	<?php 

	//all'interno di ogni array ciclo per trovare il valore di text
		for ($i=0; $i < count($value) ; $i++) { 
			?>
			<div>
				<?php echo $value[$i]["title"]?>
				<?php echo $value[$i]["author"]?>
				<?php echo $value[$i]["text"]?>
			</div>
		<?php }
}
?>




