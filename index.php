<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Join our Watchlist</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div class="container">
        <header>
            <h1>Join our Watchlist</h1>
        </header>
        <form id="watchlist-form" action="https://formsubmit.co/sochyonufab@gmail.com" method="post">
            <div class="form-group">
                <label for="full-name">Full Name<em>*</em></label>
                <input type="text" id="full-name" name="full-name" required>
            </div>
            <div class="form-group">
                <label for="email">Email<em>*</em></label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <fieldset>
                    <legend>Are you interested in paying for enhanced learning opportunities?<em>*</em></legend>
                    <div class="radio-group">
                        <input type="radio" id="yes" name="paymentInterest" value="yes">
                        <label for="yes">Yes</label>
                    </div>
                    <div class="radio-group">
                        <input type="radio" id="no" name="paymentInterest" value="no">
                        <label for="no">No</label>
                    </div>
                </fieldset>
            </div>
            <div class="form-group" id="budget-group" style="display: none;">
                <label for="budget">If you are willing to pay, what is your budget ($)?</label>
                <input type="text" id="budget" value="$" name="budget">
            </div>
            <div class="form-group">
                <label for="notes">Why would you like to apply?<em>*</em></label>
                <textarea id="notes" name="notes" rows="4"></textarea>
            </div>
            <button type="submit">Submit</button>
        </form>
        <div id="output"></div>
    </div>
    <script src="script.js"></script>
</body>

</html>