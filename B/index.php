<?php
	function add($x,$y){
		return $x+$y;
	}
	function sub($x,$y){
		return $x-$y;
	}
	function plus($x,$y){
		return $x*$y;
	}
	function div($x,$y){
		return $x/$y;
	}
	function b3($z){
		for($i=1;$i<$z;$i++){
			$len = strlen($i);
			if($len<2){
				$x = 0;
				$y = (int)$i;
				if ($i == pow(($x+$y), 2)){
					$ans .= $i." ";
				}
			}else{
				$div = $len/2;
				$x = (int)substr($i, 0, $div);
				$y = (int)substr($i, $div, $len);
				if ($i == pow(($x+$y), 2)){
					$ans .= $i." ";
				}
			}
		}
		return $ans;
	}
	if(isset($_POST['num'])){
		$ans = b3($_POST['num']);
	}
	if(isset($_POST['oper'])){
		if($_POST['oper']==0){
			$ans = add($_POST['n1'],$_POST['n2']);
		}elseif (($_POST['oper']==1)) {
			$ans = sub($_POST['n1'],$_POST['n2']);
		}elseif (($_POST['oper']==2)) {
			$ans = plus($_POST['n1'],$_POST['n2']);
		}elseif (($_POST['oper']==3)) {
			$ans = div($_POST['n1'],$_POST['n2']);
		}elseif (($_POST['oper']==4)) {
			$ans = pow($_POST['n1'],$_POST['n2']);
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="index.php" method="post">
		<input type="text" name="n1"></input><br/>
		<input type="text" name="n2"></input><br/>
		<input type="radio" name="oper" value="0">+
		<input type="radio" name="oper" value="1">-
		<input type="radio" name="oper" value="2">*
		<input type="radio" name="oper" value="3">/
		<input type="radio" name="oper" value="4">指數<br/>
		<input type="submit" value="計算"></input>
	</form>
	<?php
		include 'form.php';
	?>
	<?php echo "ANS=".$ans; ?>
</body>
</html>