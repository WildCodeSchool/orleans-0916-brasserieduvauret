
<script>
    $(document).ready(function () {
        $(".navbar-toggle").on("click", function () {
            $(this).toggleClass("active");
        });
    });
</script>

<div class="navbar navbar navbar-fixed" >

    <div class="navbar-header">
       
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span>
        </button>
        
            <a class="navbar-brand" href="#"> <img src="./img/logo.png" alt="Logo de la brasserie du vauret" class="img-responsive logo" />
            </a>
    
    </div>
    
    <div class="navbar-collapse collapse">
        <ul class="nav navbar-nav navbar-right">
            <li role="presentation" class="active"><a class="onglet" href="#">Accueil</a></li>
            <li class="active"><a class="onglet" href="#">Bières</a></li>
            <li class="active"><a class="onglet" href="#">Brasserie</a></li>
            <li class="active"><a class="onglet" href="#">Points de vente</a></li>
            <li class="active"><a class="onglet" href="#">Actualités</a></li>
            <li class="active"><a class="onglet" href="#">Contact</a></li>
        </ul>
    </div>
</div>


		


