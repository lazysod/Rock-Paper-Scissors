<?php 
include 'app/start.php';
$display_block ='<p><img src="'.BASE_URL.'/img/title-image.png" class="img-responsive centerThis" alt="Rock Paper Scissors Image"></p>';

if(isset($_POST['startBTN'])){
	$p1 = $dbcon->escape_string($_POST['p1']);
	$game = new game;
	$status = $game->play($p1);

	switch ($status['result']) {
		case 'draw':
				$display_block='<h1 class="text-center">ITS A DRAW!</h1><h2 class="text-center">Looks like you both think alike!?</h2><p class="lead text-center">Player 1 picked '.$game->get_item($status['p1']).' Player 2 picked '.$game->get_item($status['p2']).'</p>';
			break;
		case 'win':
			$meth = $game->get_object($status['p1']);
			$display_block='<h1 class="text-center">PLAYER 1 WINS</h1><h2 class="text-center">'.$meth['msg'].'</h2><p class="lead text-center">Player 1 picked '.$game->get_item($status['p1']).' Player 2 picked '.$game->get_item($status['p2']).'</p>';
			break;
		case 'loss':
			$meth = $game->get_object($status['p1']);
			$display_block='<h1 class="text-center">YOU LOST!</h1><h2 class="text-center">'.$meth['msg'].'</h2><p class="lead text-center">Player 1 picked '.$game->get_item($status['p1']).' Player 2 picked '.$game->get_item($status['p2']).'</p>';
			break;		
		default:
			$display_block='<h1 class="text-center">Something went wrong?!</h1>';
			break;
	}
}

include VIEW_ROOT . '/core/header.php';
include VIEW_ROOT . '/home.php';
include VIEW_ROOT . '/core/footer.php';
?>