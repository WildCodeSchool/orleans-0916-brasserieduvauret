<script>
    $(document).ready(function () {
        $(".navbar-toggle").on("click", function () {
            $(this).toggleClass("active");
        });
    });
</script>
<div class="navbar navbar-inverse navbar-top">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button> <a class="navbar-brand" href="#">Brasserie du Vauret</a> </div>
    <div class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
            <li class="active"><a href="#">Accueil</a></li>
            <li class="active"><a href="#">Les bières</a></li>
            <li class="active"><a href="#">La brasserie</a></li>
            <li class="active"><a href="#">Points de vente</a></li>
            <li class="active"><a href="#">Actualités</a></li>
            <li class="active"><a href="#">Contact</a></li>
        </ul>
    </div>
</div>