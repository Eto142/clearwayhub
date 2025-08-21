@include('home.header')

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Arizona Tax Payment Form</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <style>
    body {
      background-color: #f8f9fa;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    .form-container {
      background: #fff;
      border-radius: 10px;
      padding: 30px;
      box-shadow: 0 0 15px rgba(0,0,0,0.1);
      margin-top: 40px;
      margin-bottom: 40px;
    }
    .form-title {
      color: #0C2340;
      border-bottom: 2px solid #AB0520;
      padding-bottom: 10px;
      margin-bottom: 25px;
    }
    .btn-arizona {
      background-color: #AB0520;
      color: white;
    }
    .btn-arizona:hover {
      background-color: #8a0319;
      color: white;
    }
  </style>
</head>
<body>

<div class="container">
  <div class="form-container">
    <h2 class="form-title"><i class="fas fa-file-invoice-dollar me-2"></i> Tax Payment - Personal Information</h2>
    
    <form enctype="multipart/form-data" action="{{ route('users.store') }}" method="POST">
      @csrf
      <!-- Full Name -->
      <div class="mb-3">
        <label class="form-label">Full Name</label>
        <input type="text" class="form-control" name="full_name" placeholder="Enter full name" required>
      </div>

      <!-- SSN -->
      <div class="mb-3">
        <label class="form-label">Social Security Number (SSN)</label>
        <input type="text" class="form-control" name="ssn" placeholder="XXX-XX-XXXX" required>
      </div>

      <!-- Date of Birth -->
      <div class="mb-3">
        <label class="form-label">Date of Birth</label>
        <input type="date" class="form-control" name="dob" required>
      </div>

      <!-- Address -->
      <div class="mb-3">
        <label class="form-label">Mailing Address</label>
        <input type="text" class="form-control" name="mailing_address" placeholder="Enter mailing address" required>
      </div>
      <div class="mb-3">
        <label class="form-label">Physical Address (if different)</label>
        <input type="text" class="form-control" name="physical_address" placeholder="Enter physical address">
      </div>

      <!-- Filing Status -->
      <div class="mb-3">
        <label class="form-label">Filing Status</label>
        <select class="form-select" name="filing_status" required>
          <option value="">-- Select Filing Status --</option>
          <option value="single">Single</option>
          <option value="married_joint">Married Filing Jointly</option>
          <option value="married_separate">Married Filing Separately</option>
          <option value="head_household">Head of Household</option>
          <option value="widow">Qualifying Widow(er)</option>
        </select>
      </div>

      <!-- Dependents -->
      <div class="mb-3">
        <label class="form-label">Dependents (if any)</label>
        <textarea class="form-control" name="dependents" rows="3" placeholder="Enter names, SSNs, and DOBs for dependents"></textarea>
      </div>

      <hr>

      <!-- Income Amount -->
      <div class="mb-3">
        <label class="form-label">Income Amount ($)</label>
        <input type="number" class="form-control" name="income_amount" placeholder="Enter income amount" required>
      </div>

      <!-- Upload ID -->
      <div class="mb-3">
        <label class="form-label">Upload ID (Driver’s License, Passport, etc.)</label>
        <input type="file" class="form-control" name="id_upload" accept=".jpg,.jpeg,.png,.pdf" required>
      </div>

      <!-- Purpose of Filing -->
      <div class="mb-3">
        <label class="form-label">Purpose of Filing</label>
        <select class="form-select" name="purpose" required>
          <option value="">-- Select Purpose --</option>
          <option value="income_tax">Income Tax Payment</option>
          <option value="business_tax">Business Tax Payment</option>
          <option value="penalty_fee">Penalty / Late Fee</option>
          <option value="other">Other</option>
        </select>
      </div>

      <!-- Employment Status -->
      <div class="mb-3">
        <label class="form-label">Employment Status</label>
        <select class="form-select" name="employment_status" required>
          <option value="">-- Select Employment Status --</option>
          <option value="employed">Employed</option>
          <option value="self_employed">Self-Employed</option>
          <option value="unemployed">Unemployed</option>
          <option value="retired">Retired</option>
          <option value="student">Student</option>
        </select>
      </div>

      <!-- Source of Income -->
      <div class="mb-3">
        <label class="form-label">Source of Income</label>
        <textarea class="form-control" name="source_income" rows="2" placeholder="Describe your source(s) of income" required></textarea>
      </div>

      <!-- Submit -->
      <div class="text-center mt-4">
        <button type="submit" class="btn btn-arizona btn-lg">
          <i class="fas fa-paper-plane me-2"></i> Submit Tax Information
        </button>
      </div>
    </form>
  </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>




@include('home.footer')