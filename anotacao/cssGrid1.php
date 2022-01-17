<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<div>
    <h1>CSS GRID</h1>
</div>
<div class="grid-container">
  <div class="item"><input type="text"></div>
  <div class="item"><input type="text"></div>
  <div class="item"><input type="text"></div>
  <div class="item"><input type="text"></div>
  <div class="item"><input type="text"></div>
  <div class="item"><input type="text"></div>
</div>
</body>

</html>

<style>
.grid-container {
  display: grid;
  grid-template-columns: repeat(auto-fill, 350px);
  justify-content: space-around;
  grid-gap: 10px 20px;
  background-color: #2196F3;
 
}

.grid-container > div {

}
.item input{
    width: 100%;
}
</style>