<?php include('calculations.php'); ?>
<link rel="stylesheet" href="style1.css">

<body>
<div class="container">
<form name="texCal" id="texCal" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" >
    <h1>Tax Calculator</h1>
    <div class="tax-input-container">
      <div class="tax-input tax-input--income">
        <label>Gross Salary</label>
        <input id="income" type="number" name="base" placeholder="#125000" required/>
      </div>
      <div class="tax-input">
        <label>Tax Free Allowance</label>
        <input type="text"id="bar-tax" name="free" placeholder="#123456" required/>
      </div>
      <div class="tax-input">
        <label>Salary Plan</label>
        <input type="radio" id="monthly-tax" name="monthlytax" checked="true" value="monthly"/>Monthly<br>
        <input type="radio" id="monthly-tax" name="monthlytax"value="yearly"/>Yearly<br>
      </div>

    </div>
    <div class="tax-input-container">
      <input class="button" type="submit" name="submit"/>
    </div>
    <fieldset class="tax-output">
        <legend>Results</legend>
          <table>
            <tr>
              <th>Yearly Salary</th>
              <td><input type="text" id="yearly" name="yearly" value="<?php echo $yearly; ?>" readonly></td>
            </tr>
            <tr>
              <th>Monthly Salary</th>
              <td><input type="text" id="monthly" name="monthly" value="<?php echo $monthly; ?>" readonly></td>
            </tr>
            <tr>
              <th>Tax Amount</th>
              <td><input type="text" id="taxYear" name="taxYear" value="<?php echo $taxYear; ?>" readonly></td>
            </tr>
            <tr>
              <th>Tax Amount</th>
              <td><input type="text" id="taxMonth" name="taxMonth" value="<?php echo $taxMonth; ?>" readonly></td>
            </tr>
            <tr>
              <th>Social Security Tax</th>
              <td><input type="text" id="social" name="social" value="<?php echo $social; ?>" readonly></td>
            </tr>
            <tr>
              <th>Salary After Tax</th>
              <td><input type="text" id="after" name="after" value="<?php echo $after; ?>" readonly></td>
            </tr>
          </table>
    </fieldset>
  </form>
</div>
</body>