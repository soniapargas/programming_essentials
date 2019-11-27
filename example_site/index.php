<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Example site</title>
  <style>
    #title {
      text-decoration: dotted;
    }
    .red-text {
      color: red;
    }
    .blue-text {
      color: blue;
    }
    a {
      text-decoration: none;
      border-bottom: dotted 10px pink;
    }
  </style>
  <script>
    function onElementHover(mouseTarget) {
      mouseTarget.addEventListener('mouseenter', function() {
        mouseTarget.style.border = '5px dotted orange';
      });

      mouseTarget.addEventListener('mouseleave', function() {
        mouseTarget.style.border = '1px solid #333';
      });
    }

    window.onload = function() {
      var elementVar = document.querySelectorAll('.red-text');
      
      //loop
      for(var i = 0; i < elementVar.length; i++) {
        // elementVar[0];
        // elementVar[0];
        var currentDOMElement = elementVar[i];
        // DOM ELEMENT
        onElementHover(currentDOMElement);
      }
      // ...
    };
  </script>
</head>
<body>
  <?php //print_r($_SERVER['REQUEST_URI']); ?>
  <?php if($_SERVER['REQUEST_URI'] == '/app'): ?>
    <h1>Hey you are on the app</h1>
  <?php else: ?>
    <h1 id="title">This is a title</h1>
    <p class="red-text">this is a paragraph</p>
    <a href="http://google.com">A link to google</a>
    <ul>
      <li class="blue-text">this is a list</li>
      <li class="red-text">this a list item</li>
    </ul>
  <?php endif; ?>
</body>
</html>