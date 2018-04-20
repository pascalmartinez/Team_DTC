<!DOCTYPE html>
    <html>
        <head>
          <?php include '../header.html' ?>
          <link rel="stylesheet" href="../css/style.css">

        </head>

        <body>
          <section id="train" class="container-fluid">
            <div class='jumbotron'>
              <p class="text-center">Dans le train en direction de Limoges, notre héro Java trouve une cafetière avec, à l'interieur, un reste de café encore buvable.</p>
            </div>
            <div >
              <img id="cle" src="../img/cle.png" class="img-fluid d-none"/>
              <img id="caf" src="../img/caf.png" class="img-fluid"/>
            </div>
          </section>

          <?php include '../footer.php' ?>
          <script>
            $(document).ready(function(){
              var audio = new Audio('../sounds/train.mp3').play();
              var height = $(window).height();
              var width =  $(window).width();
              $('#train').css({height: height, width: width});
              $('#caf').on("click", function(){
                $('#caf').animate({top: height/2, left: width/2}, 1000, "linear");
                $('#cle').removeClass("d-none");
                $('p').empty();
                setTimeout(function(){
                  $('p').html("En se delectant d'une bonne tasse de café, Java se rend compte qu'une clé est accrochée sous le bocal de la cafetière...que peut-elle bien ouvrir?                  <button type='button' class='btn btn-primary' href='#'>Suivant</button>");}, 1000)
              })
            });
          </script>
        </body>
    </html>
