<?php
die();
if (isset($_POST['calc'])) {
    $num1 = intval($_POST['num_one']);
    $num2 = intval($_POST['num_two']);
    $ob = $_POST['optradio'];
    $result = 0;

// switch $op[+,-,*,/]

    switch ($ob):
        case "+":
            $result = $num1 + $num2;
            break;
        case "-":
            $result = $num1 - $num2;
            break;
        case "*":
            $result = $num1 * $num2;
            break;
        case "/":
            $result = $num1 / $num2;
            break;
        default:
            break;
    endswitch;
}

// divid by zero case
if ($num2 == 0 && $ob == "/") {
    $result = 'cannot divid by zero';
}
require_once './header.php';

?>

            <h1>Calculator</h1>
            
            <div class="row">
                <div class="col-lg-2">
                    
             
            <form action="<?php $_SERVER['PHP_SELF']?>" method="post">

                <label for="usr">Num One:</label>
                <input class="form-control" type="text" name="num_one" id=""/>


<!--                <select class="form-control" name="operator" id="">
                    <option value="+">+</option>
                    <option value="-">-</option>
                    <option value="*">*</option>
                    <option value="/">/</option>
                </select>           -->
                
                
<div class="radio">
    <label><input type="radio" value="+" name="optradio">+</label>
    <label><input type="radio" value="-" name="optradio">-</label>
    <label><input type="radio"  value="*" name="optradio">*</label>
    <label><input type="radio"  value="/" name="optradio">/</label>
</div>

                <label for="usr">Num Two:</label>
                <input class="form-control" type="text" name="num_two"/>
                <br>
                <input class="btn btn-danger" type="submit" name="calc" id=""/>
            </form>
                    
                       </div>    
                
            </div>
            
            
            
            <?php  var_dump($result); ?>
<?php require_once './footer.php';?>
            
