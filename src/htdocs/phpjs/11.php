<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>JavaScript</h1>
    <ol>
      <script>
        list = new Array("호현", "지원", "채현", "재우", "동현");
        i=0;
        while(i<list.length){
          document.write("<li>" + list[i] + "</li>");
          i++;
        }
      </script>
    </ol>
    <h1>php</h1>
    <ul>
    <?php
      $list = array("호현", "지원", "재우");
      $i=0;
      while($i<count($list)){
        echo "<li>".$list[$i]."</li>";
        $i++;
      }
     ?>
   </ul>
  </body>
</html>
