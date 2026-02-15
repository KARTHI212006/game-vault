<?php
// Simple Calculator web app (client-side)
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Calculator - GameVault</title>
  <link rel="stylesheet" href="assets/styles.css">
</head>
<body>
  <main class="calculator">
    <h1>Calculator</h1>
    <div class="display-area">
      <input id="display" type="text" autocomplete="off" spellcheck="false" readonly>
    </div>

    <div class="buttons">
      <button data-action="clear" class="wide">C</button>
      <button data-action="back">⌫</button>
      <button data-value="/">÷</button>

      <button data-value="7">7</button>
      <button data-value="8">8</button>
      <button data-value="9">9</button>
      <button data-value="*">×</button>

      <button data-value="4">4</button>
      <button data-value="5">5</button>
      <button data-value="6">6</button>
      <button data-value="-">−</button>

      <button data-value="1">1</button>
      <button data-value="2">2</button>
      <button data-value="3">3</button>
      <button data-value="+">+</button>

      <button data-value="0" class="wide">0</button>
      <button data-value=".">.</button>
      <button data-action="equals">=</button>
    </div>
  </main>

  <script>
    const display = document.getElementById('display');
    const buttons = document.querySelectorAll('.buttons button');

    function append(val){ display.value += val; }
    function clear(){ display.value = ''; }
    function back(){ display.value = display.value.slice(0, -1); }
    function evaluateExpr(){
      const expr = display.value.trim();
      if(!expr) return;
      try{
        // Evaluate safely by disallowing letters
        if(/[a-zA-Z]/.test(expr)) throw new Error('Invalid characters');
        // Use Function to evaluate arithmetic expression
        const result = Function('return ('+expr+')')();
        display.value = String(result);
      }catch(e){
        display.value = 'Error';
        setTimeout(()=>{ clear(); }, 1200);
      }
    }

    buttons.forEach(btn => {
      btn.addEventListener('click', ()=>{
        const v = btn.getAttribute('data-value');
        const a = btn.getAttribute('data-action');
        if(a === 'clear') return clear();
        if(a === 'back') return back();
        if(a === 'equals') return evaluateExpr();
        if(v) append(v);
      });
    });

    // Keyboard support
    window.addEventListener('keydown', (e)=>{
      if(e.key === 'Enter') return evaluateExpr();
      if(e.key === 'Backspace') return back();
      if(e.key === 'Escape') return clear();
      if("0123456789+-*/().".includes(e.key)) append(e.key);
    });
  </script>
</body>
</html>
