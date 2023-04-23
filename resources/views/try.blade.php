<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Latex to Normal Math Expression in JS</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/KaTeX/0.13.13/katex.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/KaTeX/0.13.13/katex.min.js"></script>
</head>
<body>
<input type="text" id="latexInput" placeholder="Enter LaTeX expression">
<button onclick="convertLatex()">Convert</button>
<p id="result"></p>

<script>
    function convertLatex() {
        const latex = document.getElementById("latexInput").value;
        const expression = katex.renderToString(latex, {
            throwOnError: false,
            displayMode: false
        });
        const normalExpression = expression.replace(/\\left/g, "")
            .replace(/\\right/g, "")
            .replace(/\\cdot/g, "*")
            .replace(/\\div/g, "/")
            .replace(/\\frac{(.*?)\}\{(.*?)\}/g, "($1)/($2)")
            .replace(/\\frac{(.*?)}{(.*?)}/g, "($1)/($2)")
            .replace(/\\sqrt{(.*?)}/g, "Math.sqrt($1)")
            .replace(/\\pi/g, "Math.PI")
            .replace(/\\sin{(.*?)}/g, "Math.sin($1)")
            .replace(/\\cos{(.*?)}/g, "Math.cos($1)")
            .replace(/\\tan{(.*?)}/g, "Math.tan($1)")
            .replace(/\\log{(.*?)}/g, "Math.log10($1)").replace(/<[^>]*>/g, '');
        document.getElementById("result").innerText = normalExpression;
    }
</script>
</body>
</html>
