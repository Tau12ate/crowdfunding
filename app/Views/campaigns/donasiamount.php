<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>crowdfunding jeneponto</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <!-- @TODO: replace SET_YOUR_CLIENT_KEY_HERE with your client key -->
    <!-- <script type="text/javascript" src="https://app.midtrans.com/snap/snap.js" data-client-key="Mid-client-jiahGN-6inE6Fqrv"></script> -->
    <script type="text/javascript" src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="SB-Mid-client-8gQGzsaZwsRGPcGd"></script>
    <!-- Note: replace with src="https://app.midtrans.com/snap/snap.js" for Production environment -->

    <!-- Favicons -->
    <link href="<?= base_url(); ?>/assets/img/favicon.png" rel="icon">
    <link href="<?= base_url(); ?>/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800|Montserrat:300,400,700" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?= base_url(); ?>/assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="<?= base_url(); ?>/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="<?= base_url(); ?>/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?= base_url(); ?>/assets/css/style.css" rel="stylesheet">

</head>

<body>

    <!-- ======= Loader ======= -->
    <div id="loader" class="loading">Loading&#8230;</div>

    <!-- get snatoken -->
    <input id="order-id" type="hidden" value="<?= $snapToken; ?>">
    <input id="slug" type="hidden" value="<?= $slug; ?>">
    <!-- get campaign detail -->
    <input id="campaign_id" type="hidden" value="<?= $campaign_id; ?>">
    <input id="gross_amount" type="hidden" value="<?= $gross_amount; ?>">
    <input id="donatur_name" type="hidden" value="<?= $donatur_name; ?>">
    <input id="donatur_email" type="hidden" value="<?= $donatur_email; ?>">
    <input id="donatur_phone" type="hidden" value="<?= $donatur_phone; ?>">

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script type="text/javascript">
        // For example trigger on button clicked, or any time you need
        var payButton = document.getElementById('pay-button');
        var orderId = document.getElementById('order-id');
        var slug = document.getElementById('slug').value;
        var campaign_id = document.getElementById('campaign_id').value;
        var gross_amount = document.getElementById('gross_amount').value;
        var donatur_name = document.getElementById('donatur_name').value;
        var donatur_email = document.getElementById('donatur_email').value;
        var donatur_phone = document.getElementById('donatur_phone').value;

        // Trigger snap popup. @TODO: Replace TRANSACTION_TOKEN_HERE with your transaction token
        window.snap.pay(orderId.value, {

            onSuccess: function(result) {
                /* You may add your own implementation here */
                console.log(result);
                alert("payment success!");
                window.location = "<?= base_url(); ?>/campaigns";
            },
            onPending: function(result) {
                /* You may add your own implementation here */
                // console.log(result);
                alert("wating your payment!");

                var orderId = result.order_id;
                var donasi_status = result.transaction_status;
                var payment_type = result.payment_type;

                $.ajax({
                    url: '<?= base_url(); ?>/campaigns/test',
                    type: 'post',
                    dataType: 'json',
                    data: {
                        orderId: orderId,
                        slug: slug,
                        campaign_id: campaign_id,
                        gross_amount: gross_amount,
                        donatur_name: donatur_name,
                        donatur_email: donatur_email,
                        donatur_phone: donatur_phone,
                        donasi_status: donasi_status,
                        payment_type: payment_type,
                    },

                    success: function(data) {
                        console.log(data);
                    }
                });

                // window.location = "<?= base_url(); ?>/campaigns/charge/" + slug;

            },
            onError: function(result) {
                /* You may add your own implementation here */
                console.log(result);
                alert("payment failed!");
                window.location = "<?= base_url(); ?>/campaigns";
            },
            onClose: function() {
                /* You may add your own implementation here */
                alert('you closed the popup without finishing the payment');
                window.location = "<?= base_url(); ?>/campaigns";
            }
        })
    </script>

</body>

</html>