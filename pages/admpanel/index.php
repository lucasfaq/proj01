<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

		<title>Painel do Administrador</title>

		<!-- css do bootstrap -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
		
        <!-- script do bootstrap-->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
		
        <!-- css da pagina de login -->
		<link rel="stylesheet" href="../../styles/admpanel/loginadm.css">

		<!-- icone da aba de login -->
		<link rel="icon" href="../../imgs/favicon.png" type="image/x-icon">

	</head>
	<body>
       
        <nav class="navbar navbar-light bg-light fixed-top">
            <div class="col-md-12">
                <img class="float-left" src="../../imgs/Icone.png" alt="">
                <li class="float-right nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Lucas Frota</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a href="#" class="dropdown-item">Action</a>
                        <a href="#" class="dropdown-item">Another Action</a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">Something else</a>
                    </div>
                </li>
            </div>            
       </nav>
       
       <div class="container-fluid mt-4">
           <div class="row">
               <div class="col-md-3">
                   Painel Administrativo
                   <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                       <a href="#inicio" class="nav-link active" id="v-pills-home-tab" data-toggle="pill" role="tab" aria-controls="v-pills-home" aria-selected="false">Início</a>
                       <a href="#cadcolaboradores" class="nav-link" id="cadcolaboradores-tab" data-toggle="pill" role="tab" aria-controls="cadcolaboradores" aria-selected="false">Cadastro de Colaboradores</a>
                       <a href="#cadmedicos" class="nav-link" id="cadmedicos-tab" data-toggle="pill" role="tab" aria-controls="cadmedicos" aria-selected="false">Cadastro de Médicos</a>
                       <a href="#cadempresas" class="nav-link" id="cadempresas-tab" data-toggle="pill" role="tab" aria-controls="cadempresas" aria-selected="false">Cadastro de Empresas</a>
                   </div>
                </div>
                <div class="col-md-9">
                    <div class="tab-content" id="v-pilss-tabContent">
                        <div class="tab-pane active fade" id="inicio" role="tabpanel" aria-labelledby="inicio-tab">Início</div>
                        <div class="tab-pane fade" id="cadcolaboradores" role="tabpanel" aria-labelledby="cadcolaboradores-tab">...</div>
                        <div class="tab-pane fade" id="cadmedicos" role="tabpanel" aria-labelledby="cadmedicos-tab">...</div>
                        <div class="tab-pane fade" id="cadempresas" role="tabpanel" aria-labelledby="cadempresas-tab">...</div>
                    </div>
                </div>
           </div>
       </div>
       
	</body>
</html>