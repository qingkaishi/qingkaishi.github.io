
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Qingkai Shi's Homepage</title>
<meta name="keywords" content="Qingkai Shi, QingkaiShi, Pinpoint, Static Code Analyzer, Program Analysis and Testing">
<meta name="viewport" content="initial-scale=1, maximum-scale=3, minimum-scale=1, user-scalable=no">
<link rel="icon" type="image/x-icon" href="images/favicon.ico">

<script language="javascript" type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/6.65.7/codemirror.min.js"></script>
<script language="javascript" type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/6.65.7/mode/stex/stex.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/6.65.7/codemirror.min.css"></link>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/6.65.7/theme/eclipse.min.css"></link>
</head>

<body>

<p>
    <button id="save">Save changes</button>
    <a href="cv/CV.tex" download><button id="down_tex">Download tex</button></a>
    <a href="public_pdfs/CV.pdf" download><button id="down_tex">Download pdf</button></a>
</p>
<hr>
<div style="width: 100vw;height:900px">
        <div style="width: 40%; height: 100%; float: left; background: white;">
          <div id="edit-block-content" class="edit-block">
            <textarea name="content" id="content" style="width:100%;height:895px">\documentclass[a4paper,11pt]{article}
\usepackage{cv}

\begin{document}

{\hspace*{-\marginparsep minus \marginparwidth}%
\begin{minipage}[t]{\textwidth+\marginparwidth+\marginparsep}%
\centering
{\Large \bfseries {Qingkai Shi}}
\end{minipage}}

\vspace{0.2cm}

\section{Address}

Department of Computer and Science\\
Purdue University\\
305 N. University Street\\
West Lafayette, IN 47907\\
Email: \href{mailto:shi553@purdue.edu}{{shi553@purdue.edu}}\\
URL: \href{https://qingkaishi.github.io/}{https://qingkaishi.github.io/}\\
ORCID: 0000-0002-8297-8998


\section{Experience}

\textbf{Purdue University} \hfill 2021 - Now\\
\textit{Postdoctoral Research Associate}
\vspace{0.3cm}

\textbf{Hong Kong University of Science and Technology / Sourcebrella Inc.} \hfill 2015 - 2021\\
\textit{Ph.D. in Computer Science (2020)} / \textit{Co-founder of Sourcebrella Inc. (2021)} \\
\textit{Thesis: Precise and Scalable Static Bug Finding for Industrial-Sized Code}

\section{Research}

His research focuses on the use of programming language and compiler techniques, especially static analysis, for rigorously ensuring software security, including static analysis for (1) bug scanning, (2) reverse engineering, and (3) fuzz testing.
My research has been extensively published in premium venues and has let me win ACM SIGPLAN Distinguished Paper Award, ACM SIGSOFT Distinguished Paper Award, Google Research Paper Reward, and Hong Kong Ph.D. Fellowship.
\vspace{0.3cm}

His research on bug scanning, known as the \textit{Pinpoint Static Analyzer}, has received 200M CNY ($\approx 30$M USD) investment. The startup that commercializes my research, \href{https://www.sourcebrella.com/}{Sourcebrella Inc.}, has been acquired by \href{https://www.antgroup.com/en}{Ant Group}, where \textit{Pinpoint} is deployed in daily operations for improving the quality of \href{https://global.alipay.com/platform/site/ihome}{Alipay}, a popular digital payment app with over a billion monthly active users. To date, we have discovered hundreds of vulnerabilities and CVEs in mature software.
\vspace{0.3cm}

{For further information, see \href{https://qingkaishi.github.io/}{https://qingkaishi.github.io/}.}


\section{Publication}

{His research has been published extensively at premium venues of programming language (PLDI, OOPSLA), software engineering (ICSE, FSE), and cybersecurity (S\&P, CCS).}
\vspace{0.3cm}

\textbf{{Representative Papers:}}
\vspace{0.3cm}

\begin{bibenum}
{{rep}}
\end{bibenum}
\vspace{0.6cm}

\textbf{{Other Papers:}}
\vspace{0.3cm}
\begin{bibenum}
{{common}}
\end{bibenum}
\vspace{0.3cm}

\section{Patent}
Defect detection method, device, system, and computer readable medium.
\begin{innerlist}
    \item US Patent No. 20190108003
    \item China Patent No. 201811013103,  201811013000,  201811015751, 2018110146864
\end{innerlist}

\section{Invited Talk}
Fast and Precise Static Bug Detection for Industrial-Sized Code. Texas A\&M University, College Station, United States, July 2021.
\vspace{0.2cm}

Taming Path-Sensitivity for Static Code Analysis on Industrial Scale. Nanjing University, Nanjing, China, April 2021.
\vspace{0.2cm}

The Next Generation Software Security Analysis. Nanjing University, Nanjing, China, May 2020.
\vspace{0.2cm}

Marrying Taint Analysis with Big Data Analytics. Southern University of Science and Technology, Shenzhen, China, November 2018.

\section{Service}
Reviewer, \textit{ACM Computing Surveys}
\vspace{0.2cm}

Reviewer, \textit{IEEE Transactions on Software Engineering}
\vspace{0.2cm}

Reviewer, \textit{IEEE Transactions on Dependable and Secure Computing}
\vspace{0.2cm}

Reviewer, \textit{IEEE Transactions on Reliability}
\vspace{0.2cm}

Reviewer, \textit{IEEE Transactions on Emerging Topics in Computing}
\vspace{0.2cm}

Member of Artifact Evaluation Committee, \textit{ACM SIGPLAN-SIGACT Symposium on Principles of Programming Languages (POPL'22)}
\vspace{0.2cm}

Member of Artifact Evaluation Committee, \textit{ACM SIGPLAN-SIGACT Symposium on Principles of Programming Languages (POPL'23)}
\vspace{0.2cm}

Member of External Review Committee and Artifact Evaluation Committee, \textit{European Conference on Object-Oriented Programming (ECOOP'23)}

\section{Teaching}
Teaching Assistant, COMP3111/3111H: Software Engineering (Fall 2018)
\vspace{0.2cm}

Teaching Assistant, COMP4111: Software Engineering Practices (Spring 2018)
\vspace{0.2cm}

Teaching Assistant, COMP4111: Software Engineering Practices (Fall 2016)

\end{document}</textarea>
          </div>
        </div>
        <div style="margin-left: 42%; background: white; width:58%; height:100%">
            <div id="pdf-div" style="width:100%; height:100%">
                <object data="public_pdfs/CV.pdf" type="application/pdf" width="100%" height="100%">
                </object>
            </div>
            <div id="err-div" style="width:100%; height:100%; display:none; background-color:#e6e6e6;">
            </div>
        </div>
</div>

<script>
// editor's theme
var editor = CodeMirror.fromTextArea(document.getElementById('content'), {
    lineNumbers: true,
    lineWrapping: true,
    mode: "text/x-stex",
    theme: 'eclipse',
});
editor.setSize("100%", "900px");

// button's action
function save() {
    // send post request
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "cv.php/", false);
    xhr.setRequestHeader('Content-Type', 'application/text');
    xhr.send(editor.getValue());

    var response = xhr.responseText;
    if (response != "") {
        let pdfdiv = document.getElementById("pdf-div");
        pdfdiv.style.display = "none";

        let errdiv = document.getElementById("err-div");
        errdiv.style.display = "block";
        errdiv.innerHTML = response;
    } else {
        let pdfdiv = document.getElementById("pdf-div");
        pdfdiv.style.display = "block";

        let errdiv = document.getElementById("err-div");
        errdiv.style.display = "none";
    }

    // clear cache and enforce to reload the pdf
    var objects = document.getElementsByTagName("object");
    for(var i = 0; i < objects.length; i++) {
        var obj = objects[i];
        let timestamp = new Date().getTime();
        obj.data = obj.data + "?t=" + timestamp;
    }
}

let submit_button = document.getElementById("save");
submit_button.addEventListener("click", save);
</script>

</body>
</html>

