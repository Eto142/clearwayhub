@include('home.header')

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Arizona Tax Submission Details</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <style>
    body {
      background-color: #f8f9fa;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    .details-container {
      background: #fff;
      border-radius: 10px;
      padding: 30px;
      box-shadow: 0 0 15px rgba(0,0,0,0.1);
      margin-top: 40px;
      margin-bottom: 40px;
    }
    .details-title {
      color: #0C2340;
      border-bottom: 2px solid #AB0520;
      padding-bottom: 10px;
      margin-bottom: 25px;
    }
    .detail-label {
      font-weight: 600;
      color: #0C2340;
    }
    .btn-back {
      background-color: #AB0520;
      color: white;
    }
    .btn-back:hover {
      background-color: #8a0319;
      color: white;
    }
  </style>
</head>
<body>

<div class="container">
  <div class="details-container">
    <h2 class="details-title"><i class="fas fa-file-invoice-dollar me-2"></i> Submitted Tax Details</h2>

    <div class="mb-3"><span class="detail-label">Full Name:</span> {{ $user->full_name }}</div>
    <div class="mb-3"><span class="detail-label">SSN:</span> {{ $user->ssn }}</div>
    <div class="mb-3"><span class="detail-label">Date of Birth:</span> {{ $user->dob }}</div>
    <div class="mb-3"><span class="detail-label">Mailing Address:</span> {{ $user->mailing_address }}</div>
    <div class="mb-3"><span class="detail-label">Physical Address:</span> {{ $user->physical_address ?? 'N/A' }}</div>
    <div class="mb-3"><span class="detail-label">Filing Status:</span> {{ ucfirst(str_replace('_', ' ', $user->filing_status)) }}</div>
    <div class="mb-3"><span class="detail-label">Dependents:</span> {{ $user->dependents ?? 'N/A' }}</div>
    <div class="mb-3"><span class="detail-label">Income Amount:</span> ${{ number_format($user->income_amount, 2) }}</div>
    <div class="mb-3"><span class="detail-label">Purpose of Filing:</span> {{ ucfirst(str_replace('_', ' ', $user->purpose)) }}</div>
    <div class="mb-3"><span class="detail-label">Employment Status:</span> {{ ucfirst(str_replace('_', ' ', $user->employment_status)) }}</div>
    <div class="mb-3"><span class="detail-label">Source of Income:</span> {{ $user->source_income }}</div>
    <div class="mb-3"><span class="detail-label">ID Upload:</span> 
      <a href="{{ asset('storage/' . $user->id_upload) }}" target="_blank" class="btn btn-sm btn-arizona ms-2"><i class="fas fa-eye me-1"></i> View File</a>
    </div>

    <div class="text-center mt-4">
      <a href="{{ route('users.create') }}" class="btn btn-back btn-lg"><i class="fas fa-arrow-left me-2"></i> Back to Form</a>
    </div>
  </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

@include('home.footer')
