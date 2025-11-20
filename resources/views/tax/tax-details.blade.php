@include('home.header')

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Los Angeles Tax Submission Details</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
  <style>
    :root {
      --primary-dark: #0C2340;
      --primary-red: #AB0520;
      --light-bg: #f8f9fa;
      --card-shadow: 0 10px 30px rgba(0,0,0,0.08);
      --transition: all 0.3s ease;
    }
    
    body {
      background-color: var(--light-bg);
      font-family: 'Roboto', sans-serif;
      color: #333;
      padding-bottom: 40px;
    }
    
    .details-container {
      background: linear-gradient(to bottom, #ffffff, #f9f9f9);
      border-radius: 16px;
      padding: 40px;
      box-shadow: var(--card-shadow);
      margin-top: 50px;
      margin-bottom: 40px;
      border: 1px solid rgba(12, 35, 64, 0.1);
      position: relative;
      overflow: hidden;
    }
    
    .details-container::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      height: 5px;
      background: linear-gradient(to right, var(--primary-dark), var(--primary-red));
    }
    
    .details-title {
      color: var(--primary-dark);
      border-bottom: 2px solid var(--primary-red);
      padding-bottom: 15px;
      margin-bottom: 30px;
      font-family: 'Poppins', sans-serif;
      font-weight: 700;
      display: flex;
      align-items: center;
      font-size: 28px;
    }
    
    .details-title i {
      background: var(--primary-red);
      color: white;
      width: 50px;
      height: 50px;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      margin-right: 15px;
      font-size: 22px;
    }
    
    .detail-card {
      background: #fff;
      border-radius: 12px;
      padding: 25px;
      margin-bottom: 20px;
      box-shadow: 0 5px 15px rgba(0,0,0,0.03);
      border: 1px solid rgba(0,0,0,0.05);
      transition: var(--transition);
    }
    
    .detail-card:hover {
      transform: translateY(-3px);
      box-shadow: 0 8px 20px rgba(0,0,0,0.08);
    }
    
    .detail-label {
      font-weight: 600;
      color: var(--primary-dark);
      font-size: 15px;
      text-transform: uppercase;
      letter-spacing: 0.5px;
      margin-bottom: 5px;
      display: block;
    }
    
    .detail-value {
      color: #444;
      font-size: 18px;
      font-weight: 500;
    }
    
    .tax-summary {
      background: linear-gradient(to right, rgba(171, 5, 32, 0.05), rgba(171, 5, 32, 0.1));
      border-left: 5px solid var(--primary-red);
      padding: 25px;
      border-radius: 12px;
      margin-top: 30px;
      position: relative;
    }
    
    .tax-summary h5 {
      color: var(--primary-red);
      font-weight: bold;
      display: flex;
      align-items: center;
      margin-bottom: 20px;
    }
    
    .tax-summary h5 i {
      background: var(--primary-red);
      color: white;
      width: 36px;
      height: 36px;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      margin-right: 12px;
      font-size: 16px;
    }
    
    .tax-item {
      display: flex;
      justify-content: space-between;
      padding: 8px 0;
      border-bottom: 1px dashed rgba(0,0,0,0.1);
    }
    
    .tax-item:last-child {
      border-bottom: none;
    }
    
    .btn-back {
      background: linear-gradient(to right, var(--primary-dark), var(--primary-red));
      color: white;
      border: none;
      padding: 12px 30px;
      border-radius: 50px;
      font-weight: 600;
      font-size: 16px;
      transition: var(--transition);
      box-shadow: 0 5px 15px rgba(171, 5, 32, 0.2);
      display: inline-flex;
      align-items: center;
      justify-content: center;
    }
    
    .btn-back:hover {
      transform: translateY(-3px);
      box-shadow: 0 8px 20px rgba(171, 5, 32, 0.3);
      color: white;
    }
    
    .id-badge {
      background: rgba(12, 35, 64, 0.1);
      padding: 8px 15px;
      border-radius: 50px;
      display: inline-flex;
      align-items: center;
      font-size: 14px;
      margin-top: 5px;
    }
    
    .header-icon {
      background: rgba(12, 35, 64, 0.1);
      width: 50px;
      height: 50px;
      border-radius: 12px;
      display: flex;
      align-items: center;
      justify-content: center;
      margin-right: 15px;
      color: var(--primary-dark);
    }
    
    @media (max-width: 768px) {
      .details-container {
        padding: 25px;
        margin-top: 30px;
      }
      
      .details-title {
        font-size: 24px;
      }
      
      .detail-card {
        padding: 20px;
      }
    }
  </style>
</head>
<body>

<div class="container">
  <div class="details-container">
    <h2 class="details-title">
      <div class="header-icon">
        <i class="fas fa-file-invoice-dollar"></i>
      </div>
      Submitted Tax Details
    </h2>

    <div class="row">
      <div class="col-md-6">
        <div class="detail-card">
          <span class="detail-label">Full Name</span>
          <div class="detail-value">{{ $user->full_name }}</div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="detail-card">
          <span class="detail-label">SSN</span>
          <div class="detail-value">{{ $user->ssn }}</div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="detail-card">
          <span class="detail-label">Date of Birth</span>
          <div class="detail-value">{{ $user->dob }}</div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="detail-card">
          <span class="detail-label">Filing Status</span>
          <div class="detail-value">{{ ucfirst(str_replace('_', ' ', $user->filing_status)) }}</div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="detail-card">
          <span class="detail-label">Mailing Address</span>
          <div class="detail-value">{{ $user->mailing_address }}</div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="detail-card">
          <span class="detail-label">Physical Address</span>
          <div class="detail-value">{{ $user->physical_address ?? 'N/A' }}</div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="detail-card">
          <span class="detail-label">Dependents</span>
          <div class="detail-value">{{ $user->dependents ?? 'N/A' }}</div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="detail-card">
          <span class="detail-label">Income Amount</span>
          <div class="detail-value">${{ number_format($user->income_amount, 2) }}</div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="detail-card">
          <span class="detail-label">Purpose of Filing</span>
          <div class="detail-value">{{ ucfirst(str_replace('_', ' ', $user->purpose)) }}</div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="detail-card">
          <span class="detail-label">Employment Status</span>
          <div class="detail-value">{{ ucfirst(str_replace('_', ' ', $user->employment_status)) }}</div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="detail-card">
          <span class="detail-label">Source of Income</span>
          <div class="detail-value">{{ $user->source_income }}</div>
        </div>
      </div>
    <div class="col-md-6"> 
  <div class="detail-card">
    <span class="detail-label">ID Upload</span>
    <div class="detail-value">

      {{-- Always show "View File" button --}}
      <a href="{{ asset($user->id_upload) }}" target="_blank" class="btn btn-sm btn-outline-primary ms-2">
        <i class="fas fa-eye me-1"></i> View File
      </a>

      {{-- Preview if it's an image --}}
      @if(Str::endsWith(strtolower($user->id_upload), ['.jpg', '.jpeg', '.png', '.gif', '.webp']))
        <div class="mt-3">
          <img src="{{ asset($user->id_upload) }}" 
               alt="Uploaded ID" 
               class="img-fluid rounded shadow-sm" 
               style="max-width: 250px;">
        </div>
      @else
        {{-- Show badge if it's PDF or other --}}
        <div class="id-badge mt-3">
          <i class="fas fa-file-pdf me-1 text-danger"></i> Uploaded Document
        </div>
      @endif

    </div>
  </div>
</div>

 


    {{-- <!-- Tax Summary Section -->
    <div class="tax-summary">
      <h5><i class="fas fa-percent"></i> Tax Calculation Summary</h5>
      
      <div class="tax-item">
        <span>Declared Income:</span>
        <strong>${{ number_format($user->income_amount, 2) }}</strong>
      </div>
      <div class="tax-item">
        <span>Tax Rate:</span>
        <strong>3.9%</strong>
      </div>
      <div class="tax-item">
        <span class="text-danger">Calculated Tax:</span>
        <strong class="text-danger">${{ number_format($tax, 2) }}</strong>
      </div>
    </div> --}}

    <!-- Tax Summary Section -->
<div class="tax-summary">
  <h5><i class="fas fa-university me-2"></i> Tax Payment Notice</h5>
  
  <p>
    Your declared income has been reviewed and the applicable tax has been calculated.  
    To <strong>complete your transfer</strong> and receive your <strong>Tax Code</strong>,  
    please proceed with the tax payment.
  </p>

  <div class="tax-item mb-2">
    <span>Declared Income:</span>
    <strong>${{ number_format($user->income_amount, 2) }}</strong>
  </div>
  <div class="tax-item mb-2">
    <span>Tax Rate:</span>
    <strong>1.0%</strong>
  </div>
  <div class="tax-item mb-3">
    <span class="text-danger">Calculated Tax:</span>
    <strong class="text-danger">${{ number_format($tax, 2) }}</strong>
  </div>

  <p class="mb-0">
    📧 For payment instructions, kindly contact the <strong>Los Angeles Tax Department</strong> at:  
    <a href="mailto:support@clearwayhub.online" class="fw-bold text-decoration-none text-dark">
      support@clearwayhub.online
    </a>
  </p>
</div>


    {{-- <div class="text-center mt-5 pt-3">
      <a href="{{ route('users.create') }}" class="btn btn-back"><i class="fas fa-arrow-left me-2"></i> Back to Form</a>
    </div> --}}

    <div class="text-center mt-5 pt-3">
  <a href="{{ route('users.create') }}" class="btn btn-back me-3">
    <i class="fas fa-arrow-left me-2"></i> Back to Form
  </a>
  
  {{-- <a href="{{ route('tax.payment', ['user' => $user->id]) }}" class="btn btn-success">
    <i class="fas fa-credit-card me-2"></i> Proceed to Payment
  </a> --}}
{{-- 
   <a href="#" id="returnBtn" class="btn btn-success">
  <i class="fas fa-credit-card me-2"></i> Proceed to Payment
</a>

<script>
document.addEventListener("DOMContentLoaded", function () {
    const params = new URLSearchParams(window.location.search);
    const returnUrl = params.get("return");

    const btn = document.getElementById("returnBtn");
    if (returnUrl) {
        btn.href = returnUrl;
    } else {
        btn.href = "https://assurehold.com/"; // fallback
    }
});
</script> --}}


<a href="#" id="returnBtn" class="btn btn-success">
  <i class="fas fa-credit-card me-2"></i> Proceed to Payment
</a>

<script>
document.addEventListener("DOMContentLoaded", function () {
    const params = new URLSearchParams(window.location.search);
    const returnUrl = params.get("return"); // now contains Assurehold URL

    const btn = document.getElementById("returnBtn");
    if (returnUrl) {
        btn.href = returnUrl; // will go back to Assurehold loading2
    } else {
        btn.href = "https://assurehold.com/"; // fallback
    }
});
</script>

</div>

  </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

@include('home.footer')