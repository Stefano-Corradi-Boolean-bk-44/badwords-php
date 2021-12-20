<?php 

$paragrafo = "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ut, soluta ad aliquid, blanditiis dignissimos natus at reprehenderit maiores commodi eum consequatur vero quae aut delectus totam error! Officia itaque harum soluta quos cum tenetur enim earum, dolores repellendus illum? Ea, numquam dolorum accusamus saepe asperiores rerum dolorem obcaecati expedita hic rem aperiam sapiente placeat veritatis laudantium culpa laborum voluptatibus necessitatibus ratione quis ipsum aliquid aliquam esse! Perspiciatis facilis sunt repudiandae sequi dolorem provident ea reprehenderit corporis unde. Quia fugit vitae voluptatum in iure libero laudantium quo magnam est delectus amet animi sunt iusto nostrum, incidunt ab molestias corporis magni ea voluptates. Magnam libero ipsam natus veniam, possimus omnis officiis quibusdam porro expedita corrupti est, adipisci eveniet repellendus quam reprehenderit esse harum suscipit sapiente minima quos! Obcaecati distinctio odit dolor expedita pariatur ducimus voluptatibus fuga commodi cupiditate molestiae, soluta impedit, ipsam, nostrum quia eveniet! Consequuntur, incidunt deserunt minima soluta ipsum quia culpa saepe vero sapiente explicabo similique enim qui, quis quaerat at expedita quisquam nisi necessitatibus, maxime quod exercitationem? Dignissimos illo sit delectus asperiores consequuntur consectetur, ipsum id iusto enim commodi quo, ducimus sint temporibus rerum expedita vel? Nobis enim assumenda laborum alias. In perferendis ipsum esse, delectus odio maiores dolore at alias inventore aspernatur hic dicta accusantium possimus voluptates officiis nobis enim illo mollitia similique facilis impedit beatae tempore quia. Doloremque, nostrum nemo quod vitae veniam itaque libero esse nesciunt voluptates, id atque ipsa possimus unde aspernatur consequatur totam blanditiis quas, non nobis accusamus voluptatem ipsam ab tenetur! Inventore, animi suscipit exercitationem dolores, ex excepturi adipisci doloremque nisi enim nobis velit impedit dolorem fugit ullam repellat alias, libero blanditiis in sapiente incidunt. Tenetur reprehenderit assumenda sed sapiente laboriosam ipsam nihil illum temporibus incidunt recusandae nobis fuga, accusantium beatae ex animi itaque, veritatis modi exercitationem dolorum? Quam explicabo iure fuga quisquam.";

$bedword = $_GET['bw'];

$paragrafo_cerretto = str_replace($bedword, '...', $paragrafo);


var_dump($_GET);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Badwords</title>
</head>
<body>
  <h1>PHP Badwords</h1>
  <h3>La parola da cercare è: "<?php echo $bedword ?>"</h3>
  <hr>
  <h2>Paragrafo originale:</h2>
  <p><?php echo $paragrafo; ?></p>
  <p>Linghezza paragrafo: <strong><?php echo strlen($paragrafo) ?></strong> caratteri</p>
  <hr>
  <h2>Paragrafo corretto:</h2>
  <p><?php echo $paragrafo_cerretto; ?></p>
  <p>Linghezza paragrafo: <strong><?php echo strlen($paragrafo_cerretto) ?></strong> caratteri</p>
  
</body>
</html>