<!doctype html>
<html>
<head>
    <title>CP calculator</title>
    <link rel="stylesheet" href="{{asset("css/bootstrap.min.css")}}">
    <style>
        @font-face {
            font-family: casio-logo-font;
            src: url("{{asset("fonts/eurostile_extended_black.ttf")}}");
        }
        @font-face {
            font-family: casio-buttons;
            src: url("{{asset("fonts/ES03.TTF")}}");
        }
        .casio-logo{
            font-family: casio-logo-font;
            font-weight: bold;
        }
        .utility{
            justify-content: center;
            display: flex;
            align-items: center;
            background: #2f1d1b;
            font-family: 'casio-logo-font';
            color: white;
        }
        .display{
            height: 100px;
            background: #cfe3e4;
            font-family: math;
            font-weight: bold;
        }
        .output-line{
            bottom: 0;
            right: 12px;
        }

        .casio-body button{
            width: 100%;
            font-family: casio-buttons;
            border: none;
            background: #716f72;
            border-radius: 3px;
            color: white;
        }
        .casio-body table{
            width: 100%;
        }
        .basic-buttons .col{
            padding: 0;
        }
        .expression-line{
            width: 98% !important;
            border: none !important;
            height: 64px;
            box-shadow: none !important;
            margin: 5px 0 0 -7px;
            overflow: auto;
        }
        .expression-line:hover,.expression-line:focus{
            border: none !important;
            box-shadow: none !important;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col col-md col-lg col-sm">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                        <div class="col">
                            <h1 class="casio-logo">CASIO</h1>
                            <h3>fx-991ES PLUS</h3>
                        </div>
                        <div class="col utility">
                            <div class="clock">
                                <span id="hours">02</span>
                                <span id="separator">:</span>
                                <span id="mins">34</span>
                                <span id="separator">:</span>
                                <span id="mins">20</span>
                                <span id="separator">:</span>
                                <span id="AMPM"> AM</span>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="card-body display-holder">
                        <div class="col display position-relative">
                            <div class="expression-line position-absolute"></div>
                            <div class="output-line position-absolute"></div>
                        </div>
                    </div>
                    <div class="card-body casio-body">
                        <div class="advanced-buttons row">

                        </div>
                        <div class="body-buttons row">
                            <div class="basic-buttons col">
                                <table>
                                    <tr>
                                        <td><button data-operation="7">7</button></td>
                                        <td><button data-operation="8">8</button></td>
                                        <td><button data-operation="9">9</button></td>
                                        <td><button data-operation="del">o</button></td>
                                        <td><button data-operation="reset">C</button></td>
                                    </tr>
                                    <tr>
                                        <td><button data-operation="4">4</button></td>
                                        <td><button data-operation="5">5</button></td>
                                        <td><button data-operation="6">6</button></td>
                                        <td><button data-operation="*">O</button></td>
                                        <td><button data-operation="/">P</button></td>
                                    </tr>
                                    <tr>
                                        <td><button data-operation="1">1</button></td>
                                        <td><button data-operation="2">2</button></td>
                                        <td><button data-operation="3">3</button></td>
                                        <td><button data-operation="+">+</button></td>
                                        <td><button data-operation="-">p</button></td>
                                    </tr>
                                    <tr>
                                        <td><button data-operation="0">0</button></td>
                                        <td><button data-operation=".">.</button></td>
                                        <td><button data-operation="*10^">K</button></td>
                                        <td><button data-operation="ans">M</button></td>
                                        <td><button data-operation="=">=</button></td>
                                    </tr>
                                </table>
                            </div>
                            <div class="advanced-buttons col d-none">
                                <table>
                                    <tr>
                                        <td><button data-operation="7">7</button></td>
                                        <td><button data-operation="8">8</button></td>
                                        <td><button data-operation="9">9</button></td>
                                        <td><button data-operation="del">o</button></td>
                                        <td><button data-operation="reset">C</button></td>
                                    </tr>
                                    <tr>
                                        <td><button data-operation="4">4</button></td>
                                        <td><button data-operation="5">5</button></td>
                                        <td><button data-operation="6">6</button></td>
                                        <td><button data-operation="*">O</button></td>
                                        <td><button data-operation="/">P</button></td>
                                    </tr>
                                    <tr>
                                        <td><button data-operation="1">1</button></td>
                                        <td><button data-operation="2">2</button></td>
                                        <td><button data-operation="3">3</button></td>
                                        <td><button data-operation="+">+</button></td>
                                        <td><button data-operation="-">p</button></td>
                                    </tr>
                                    <tr>
                                        <td><button data-operation="0">0</button></td>
                                        <td><button data-operation=".">.</button></td>
                                        <td><button data-operation="*10^" style="font-family: monospace">10^x</button></td>
                                        <td><button data-operation="ans">M</button></td>
                                        <td><button data-operation="=">=</button></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/mathquill/0.10.1/mathquill.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mathquill/0.10.1/mathquill.min.css">
    <script src="https://cdn.jsdelivr.net/npm/evaluatex@2.2.0/dist/evaluatex.min.js"></script>
    <script src="https://unpkg.com/mathjs@11.8.0/lib/browser/math.js"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=es6"></script>
    <script src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-svg.js"></script>

    <script>
        $(document).ready(function() {
            const MQ = MathQuill.getInterface(2); // MathQuill version 2
            function replaceTrigFunctions(expr) {
                return expr.replace(/\\s\*i\*n\ \*/g,"sin").replace(/\\c\*o\*s\ \*/g,"cos").replace(/\\t\*a\*n\ \*/g,"tan").replace(/\\c\*o\*t\ \*/g,"cot").replace(/\\operatorname\{c\*o\*s\*e\*c\}\*/g,"csc").replace(/\\s\*e\*c\ \*/g,"sec").replace(/\\d\*e\*g/g,"deg").replace(/\\r\*a\*d/g,"rad");
            }


            const mathField = MQ.MathField($(".expression-line")[0], {
                handlers: {
                    edit: function () {
                            let latex = mathField.latex();
                            let asciimath = mathField.text()

                            try {
                                asciimath = replaceTrigFunctions(asciimath);
                                console.log(asciimath, "OKAY");
                                node = math.parse(asciimath)
                                $(".output-line").css("color", "black");
                                $(".output-line").text(node.compile().evaluate());
                            } catch (err) {
                                console.log(err);
                                $(".output-line").css("color", "red");
                            }
                    }
                }
            });

            let text_target=$('textarea');
            $(window).on("keydown",(e)=>{
                if(e.keyCode>=48&&e.keyCode<=57||e.key==='+'||e.key==='-'||e.key==='*'||e.key==='/'||e.key===' '||e.key==='('||e.key===')'||e.key==='{'||e.key==='}'||e.key==='['||e.key===']'){
                    mathField.focus();
                }
            });

            $("button").on("click",(e)=>{
                let target=e.target;
                let data=$(target).data("operation").toString();
                console.log(data)
                mathField.focus();
                mathField.typedText(data);
            });

        });
    </script>

</body>
</html>
