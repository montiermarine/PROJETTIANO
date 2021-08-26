<?php
$months = [
    'Janvier',
    'Février',
    'Mars',
    'Avril',
    'Mai',
    'Juin',
    'Juillet',
    'Août',
    'Septembre',
    'Octobre',
    'Novembre',
    'Décembre'
];

$selectedMonth = (!empty($_POST['month']) ? $_POST['month'] : date('n'));
$selectedYear = (!empty($_POST['year']) ? $_POST['year'] : date('Y'));

$numberOfDaysInMonth = cal_days_in_month(CAL_GREGORIAN, $selectedMonth, $selectedYear);
$firstDayOfMonth = date('N', mktime(0, 0, 0, $selectedMonth, 1, $selectedYear));
$numberOfCellsBefore = $firstDayOfMonth - 1;
$lastDayOfMonth = date('N', mktime(0, 0, 0, $selectedMonth, $numberOfDaysInMonth, $selectedYear));;
$numberOfCellsAfter = 7 - $lastDayOfMonth;
$numberOfCells = $numberOfCellsBefore + $numberOfDaysInMonth + $numberOfCellsAfter;
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />
    <title>Calendrier</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form action="#" method="POST">
                    <select name="month" id="month">
                        <?php foreach ($months as $key => $month) { ?>
                            <option value="<?= $key + 1 ?>" <?= $selectedMonth == $key + 1 ? 'selected' : '' ?>><?= $month ?></option>
                        <?php } ?>
                    </select>
                    <select name="year" id="year">
                        <?php for ($year = 1900; $year <= 2100; $year++) { ?>
                            <option value="<?= $year ?>" <?= $selectedYear == $year ? 'selected' : '' ?>><?= $year ?></option>
                        <?php } ?>
                    </select>
                    <input type="submit" value="Ok" />
                </form>
                <table class="table table-bordered table-responsive mt-5 text-center">
                    <thead class="bg bg-primary text-white">
                        <tr>
                            <th>Lundi</th>
                            <th>Mardi</th>
                            <th>Mercredi</th>
                            <th>Jeudi</th>
                            <th>Vendredi</th>
                            <th>Samedi</th>
                            <th>Dimanche</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <?php $numberOfTheDay = 1; ?>
                            <?php for ($cell = 1; $cell <= $numberOfCells; $cell++) { ?>
                                <?php if ($cell >= $firstDayOfMonth && $numberOfTheDay <= $numberOfDaysInMonth) { ?>
                                    <td class="width"><?= $numberOfTheDay ?></td>
                                <?php
                                    $numberOfTheDay++;
                                } else {
                                ?>
                                    <td class="bg-light width"></td>
                                <?php
                                }
                                if ($cell % 7 == 0) {
                                ?>
                        </tr>
                        <tr>
                    <?php
                                }
                            }
                    ?>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>