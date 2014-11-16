function generate_tfn() { /* Create vars */
    var tfn = Math.floor(100000000 + Math.random() * 900000000);
    var sum;
    var zero = 13;
    var weights = [10, 7, 8, 4, 6, 3, 5, 2, 1]; /* Loop through each */
    while (zero !== 0) { /* Reset vars */
        sum = 0;
        tfn = parseInt(tfn) + 1;
        product = 0; /* Loop through each number */
        for (var i = 0; i < String(tfn).length; i++) { /* Check digit */
            sum = sum + (String(tfn).substr(i, 1) * weights[i]);
        } /* Check if valid */
        zero = sum % 11;
    } /* Show TFN to user */
    return tfn;
}

// http://www.whatibroke.com/?p=765