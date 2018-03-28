<?php
 
 //add_filter( 'the_content', 'the_contents' );
 
add_action('get_footer','fprobando');
add_action('get_header','fprobando2');
 function fprobando2(){
     ?>
        <div style="width:100%;background-color:yellow;font-size:23px;">Header modificado agregandole un div</div>
     <?php
 }
function fprobando(){
    ?>
        
        <script> 
        var para = document.createElement("div");
        
        para.style.background = "#fc5a7b";
        para.style.border = "thick solid yellow";
        para.style.width = "85%";
        para.style.font = "italic bold 28px arial,serif";
        para.style.height = "250px";
        para.style.height = "250px";
        para.innerHTML = "Contenido agregado. DIV creado con JS y CSS utilizando un action hook";
        var elemento =  document.getElementsByClassName("main-content-page");
     
        console.log(elemento);
       
      elemento[0].appendChild(para);
        </script>
    <?php
    
    
     
}
 
function the_contents( $content ) {
     //...aca sigue la funcion que muestra un div rojo..
 
    // Don't proceed with this function if we're not viewing a single post.
  //if ( ! is_single() ) {
      //  return $content;
   // }
 
    // First, define the message to be displayed.
    $html .= '<div style="background-color:red;width:500px;">';
        $html .= '<p>Mensaje creado por la funcion the_contents() !!</p>';
    $html .= '</div>';
 
    // Now prepend it to the content.
    $content = $html .= $content;
 
    return $content;
}
 