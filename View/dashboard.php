<main>
    <div class="topBar">
        <div class="pageTitle">Page Title</div>
        <div class="search">
            <input type="search" placeholder="search anything">
            <button>Search</button>
        </div>
    </div>
    <div class="cardBox">
        <div class="card" onclick="window.location='pregnantCows';">
            <div>
                <div class="numbers pink"><?= sizeof($pregnantCows) ?></div>
                <div class="cardName">Pregnant Cows</div>
            </div>

            <div class="iconBx">
                <img src=<?php echo $dots . './components/icons/cow.png' ?> alt="">
            </div>
        </div>

        <div class="card">
            <div>
                <div class="numbers darkred">Pending</div>
                <div class="cardName">Sick Animals</div>
            </div>

            <div class="iconBx">
                <img src=<?php echo $dots . './components/icons/temperature.png' ?> alt="">
            </div>
        </div>

        <div class="card">
            <div>
                <div class="numbers warning">Pending</div>
                <div class="cardName">Low-Yield Cows</div>
            </div>

            <div class="iconBx">
                <img src=<?php echo $dots . './components/icons/low.png' ?> alt="">
            </div>
        </div>
    </div>

    <div class="smallcardbox">
        <div class="smallcard milk">
            <div class="milkqnt"><?= $_SESSION['todayMilk'] ?> L</div>
            <div class="text">Milk Today</div>
        </div>

        <div class="smallcard price">
            <div class="milkqnt"><?= $_SESSION['todayProfit'] ?> Rs</div>
            <div class="text">Sale Price</div>
        </div>

        <div class="smallcard expense">
            <div class="milkqnt"><?= $_SESSION['todayExpense'] ?> Rs</div>
            <div class="text">Expense Today</div>
        </div>

        <div class="smallcard profit">
            <div class="milkqnt"><?= $_SESSION['todayProfit'] - $_SESSION['todayExpense'] ?> Rs</div>
            <div class="text">Profit Today</div>
        </div>
    </div>
    
    <div class="chart-container">
        <canvas id="weekBarChart"></canvas>
        <span class="text-muted"><i>Last Seven Days' Record</i></span>
    </div>

    <script>
        var labels = <?php echo json_encode($labels); ?>;
        var chartData = <?php echo json_encode($chartData); ?>;
        var expenseReport = <?php echo json_encode($expenseReport); ?>;
        var profit = <?php echo json_encode($profit); ?>;

        var ctx = document.getElementById('weekBarChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: labels,
                datasets: [{
                    label: 'Milk (Liters)',
                    data: chartData,
                    backgroundColor: 'blue',
                }, {
                    label: 'Expenses (Rs)',
                    data: expenseReport,
                    backgroundColor: 'red',
                }, {
                    label: 'Profit (Rs)',
                    data: profit,
                    backgroundColor: 'green',
                }]
            },
            options: {
                responsive: true,
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>

</main>