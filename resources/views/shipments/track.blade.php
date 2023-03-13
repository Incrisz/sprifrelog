<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<div class="container">
        <h1>Track Your Shipment</h1>
        <form method="post" action="{{ route('trackedshipment')}}">
        @csrf
            <div class="form-group">
                <label for="tracking-number">Enter your tracking number:</label>
                <input type="text" class="form-control" id="tracking-number" name="tracking_id" required>
            </div>
            <input type="hidden" id="api-endpoint" value="{{ config('app.api_endpoint') }}">
            <button type="submit" class="btn btn-primary">Track</button>
        </form>
    </div>

</body>
</html>