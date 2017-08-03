<?php 

// include DB file here

class error {

	public function help()
	{
		$x='';
		$x.='Use the following: Success, danger, warning, notice EH:<br/>';
		$x.='$error->success("This is a success message")';

		return $x;
	}

	public function success($message)
	{

		$content ='<div class="alert alert-dismissable alert-success">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    '.$message.'</div>';
		return $content;
	}

	public function danger($message)
	{
		$content ='<div class="alert alert-dismissable alert-danger">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    '.$message.'</div>';
		return $content;		
	}

	public function warning($message)
	{
		$content ='<div class="alert alert-dismissable alert-warning">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    '.$message.'</div>';
		return $content;		
	}

	public function notice($message)
	{
		$content ='<div class="alert alert-dismissable alert-notice">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    '.$message.'</div>';
		return $content;		
	}

}

?>