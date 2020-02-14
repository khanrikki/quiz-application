<!DOCTYPE html>
<html>

<head>
    <title>Quiz</title>
    <link rel="stylesheet" href="quiz.css">

    <script>
        // function toggleActive() {
        //     let option = document.querySelectorAll("li.option");
        //     for (let i = 0; i < option.length; i++) {
        //         option[i].onclick = function() {
        //             for (let i = 0; i < option.length; i++) {
        //                 if (option[i].classList.contains("active")) {
        //                     option[i].classList.remove("active");
        //                 }
        //             }
        //             option[i].classList.add("active");
        //         }
        //     }

        // }
        // toggleActive();





        // Time
        let dt = new Date(new Date().setTime(0));
        let time = dt.getTime();
        let seconds = Math.floor((time % (100 * 60)) / 1000);
        let minutes = Math.floor((time % (1000 * 60 * 60)) / (1000 * 60));
        let timex = 0;
        // console.log(seconds);
        setInterval(function() {
            if (seconds < 59) {
                seconds++;
            } else {

                minutes++;
                seconds = 0;
            }
            // console.log(seconds, minutes);
            //  document.querySelector(".time").innerHTML = '$(minutes) : $(secconds)';
            // document.getElementById("time").value = seconds + " : " + minutes;
            document.getElementById("time").innerHTML = `${minutes} : ${seconds}`;

        }, 1000)
    </script>



</head>

<body>
    <div class="wrapper">
        <div class="quiz">
            <div class="quiz-header">
                <div class="quiz-user">
                    <h4>Online Quiz</h4>

                </div>
                <div class="quiz-timer"><span id="time">00:00</span></div>



            </div>
            <div class="quiz-body">
                <h2>Q1 : what is english?</h2>
                <ul class="option-group" id="selected-options">
                    <li class="option">Option 1</li>
                    <li class="option">Option 2</li>
                    <li class="option">Option 3</li>
                    <li class="option">Option 4</li>
                </ul>
                <button class="btn-next">Submit</button>
            </div>
        </div>
    </div>

</body>
<script>
    var el = document.getElementById('selected-options');
    if (el) {
        el.addEventListener('click', () => {
            console.log('clicked!!!!!');

            let option = document.querySelectorAll("li.option");
            for (let i = 0; i < option.length; i++) {
                option[i].onclick = function() {
                    for (let i = 0; i < option.length; i++) {
                        if (option[i].classList.contains("active")) {
                            option[i].classList.remove("active");
                        }
                    }
                    option[i].classList.add("active");
                }
            }

        });
    } else {
        console.log("element not get")
    }
</script>

</html>