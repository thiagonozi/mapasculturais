<?php
$this->layout = 'panel'
?>
<div class="panel-list panel-main-content">
	<header class="panel-header clearfix">
		<h2>Meus agentes</h2>
		<a class="btn btn-default add" href="<?php echo $app->createUrl('agent', 'create'); ?>">Adicionar novo agente</a>
	</header>
    <ul class="abas clearfix clear">
        <li class="active"><a href="#ativos">Ativos</a></li>
        <li><a href="#lixeira">Lixeira</a></li>
    </ul>
    <div id="ativos">
        <?php foreach($user->enabledAgents as $entity): ?>
            <?php $this->part('panel-agent', array('entity' => $entity)); ?>
        <?php endforeach; ?>
        <?php if(!$user->enabledAgents): ?>
            <div class="alert info">Você não possui nenhum agente cadastrado.</div>
        <?php endif; ?>
    </div>
    <!-- #ativos-->
    <div id="lixeira">
        <?php foreach($app->user->trashedAgents as $entity): ?>
            <?php $this->part('panel-agent', array('entity' => $entity)); ?>
        <?php endforeach; ?>
        <?php if(!$user->trashedAgents): ?>
            <div class="alert info">Você não possui nenhum agente na lixeira.</div>
        <?php endif; ?>
    </div>
    <!-- #lixeira-->
</div>
