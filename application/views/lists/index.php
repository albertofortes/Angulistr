<?php $this->load->view('includes/header'); ?>

<header class="page-header">
	<h1>Tus listas de la compra:</h1>
</header>

<?php if($flash_message) : ?>
	<div class="alert alert-success">
		<button data-dismiss="alert" class="close" type="button">×</button>
		<p><?= $flash_message ?></p>
	</div>
<?php endif; ?>

<div ng-app="Angulistr" ng-controller="mainController" ng-init="init()">

	<div id="filter">
		<input type="search" ng-model="q" placeholder="filtrar" />
		<select ng-model="statusField" ng-options="label for label in statusFields"></select>
	</div>

	<div class="list-container clearfix" ng-repeat="list in lists | filter:q | filter:byStatus">
	
		<a title="ver tu lista" href="#">
			<img class="imagen" alt="{{list.name}}" ng-src="{{list.picture == '' && '<?php echo base_url()?>assets/images/html/basket.png' || list.picture}}" />
		</a>
		<h2><a title="ver tu lista" href="#">{{list.name}}</a></h2>
		<p class="desc">{{list.description}}</p>
		<div class="actions">
			<p class="date">{{list.date}}</p>
			<?= anchor("lists/view/{{list.id}}", '<span class="icon-eye-open"></span> Ver', array('title' => 'Ver', 'class' =>'btn no-Mobile')); ?>
			<?= anchor("lists/complete/{{list.id}}", '<span class="icon-ok icon-white"></span>Hecha!', array('title' => 'Marcar como hecha', 'class' =>'btn btn-success')); ?>
			<?= anchor("lists/edit/{{list.id}}", '<span class="icon-pencil"></span> Editar', array('title' => 'Editar esta lista', 'class' =>'btn')); ?>
			<?= anchor("lists/delete/{{list.id}}", '<span class="icon-remove icon-white"></span> Eliminar', array('title' => 'Eliminar esta lista', 'class' =>'btn btn-danger')); ?>

		</div>
		
	</div><!--list-container-->
	
</div><!--ng-app="Angulistr"-->


<?php $this->load->view('includes/footer'); ?>

