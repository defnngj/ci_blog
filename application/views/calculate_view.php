<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ÍøÒ³¼ÆËãÆ÷</title>
<style type="text/css">
#calculators {
        margin: 10% auto;
        width:430px;
        border:1px solid #000;
}
</style>
</head>

<body>
<div id="calculators">
        <form action="index.php/calculate/count" method="post">
                <input type="text" name="num1" id="num1" />
                <select name="operate" id="operate">
                        <option value="+">+</option>
                        <option value="-">-</option>
                        <option value="x">x</option>
                        <option value="¡Â">¡Â</option>
                </select>
                <input type="text" name="num2" id="num2" />
                <input type="submit" value="¼ÆËã" />
        </form>
</div>
</body>
</html>