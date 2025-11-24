@include('home.header')

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Los Angeles Tax Payment Form</title>
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
    .btn-Los Angeles {
      background-color: #AB0520;
      color: white;
    }
    .btn-Los Angeles:hover {
      background-color: #8a0319;
      color: white;
    }
  </style>
</head>
<body>

<div class="container">
  <div class="form-container">
    <h2 class="form-title"><i class="fas fa-file-invoice-dollar me-2"></i> Tax Payment - Personal Information</h2>
    
   @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form enctype="multipart/form-data" action="{{ route('users.store') }}" method="POST">
    @csrf

    <!-- preserve return URL -->
    <input type="hidden" name="return" value="{{ request('return') }}">

    <!-- Full Name -->
    <div class="mb-3">
        <label class="form-label">Full Name</label>
        <input type="text" class="form-control @error('full_name') is-invalid @enderror" name="full_name" 
               placeholder="Enter full name" value="{{ old('full_name') }}" required>
        @error('full_name')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <!-- SSN -->
    <div class="mb-3">
        <label class="form-label">Social Security Number (SSN)</label>
        <input type="text" class="form-control @error('ssn') is-invalid @enderror" name="ssn" 
               placeholder="XXX-XX-XXXX" value="{{ old('ssn') }}" required>
        @error('ssn')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <!-- Date of Birth -->
    <div class="mb-3">
        <label class="form-label">Date of Birth</label>
        <input type="date" class="form-control @error('dob') is-invalid @enderror" name="dob" 
               value="{{ old('dob') }}" required>
        @error('dob')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <!-- Address -->
    <div class="mb-3">
        <label class="form-label">Mailing Address</label>
        <input type="text" class="form-control @error('mailing_address') is-invalid @enderror" name="mailing_address" 
               placeholder="Enter mailing address" value="{{ old('mailing_address') }}" required>
        @error('mailing_address')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label class="form-label">Physical Address (if different)</label>
        <input type="text" class="form-control @error('physical_address') is-invalid @enderror" name="physical_address" 
               placeholder="Enter physical address" value="{{ old('physical_address') }}">
        @error('physical_address')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <!-- Filing Status -->
    <div class="mb-3">
        <label class="form-label">Filing Status</label>
        <select class="form-select @error('filing_status') is-invalid @enderror" name="filing_status" required>
            <option value="">-- Select Filing Status --</option>
            <option value="single" {{ old('filing_status') == 'single' ? 'selected' : '' }}>Single</option>
            <option value="married_joint" {{ old('filing_status') == 'married_joint' ? 'selected' : '' }}>Married Filing Jointly</option>
            <option value="married_separate" {{ old('filing_status') == 'married_separate' ? 'selected' : '' }}>Married Filing Separately</option>
            <option value="head_household" {{ old('filing_status') == 'head_household' ? 'selected' : '' }}>Head of Household</option>
            <option value="widow" {{ old('filing_status') == 'widow' ? 'selected' : '' }}>Qualifying Widow(er)</option>
        </select>
        @error('filing_status')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <!-- Dependents -->
    <div class="mb-3">
        <label class="form-label">Dependents (if any)</label>
        <textarea class="form-control @error('dependents') is-invalid @enderror" name="dependents" rows="3" 
                  placeholder="Enter names, SSNs, and DOBs for dependents">{{ old('dependents') }}</textarea>
        @error('dependents')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <hr>

    <!-- Income Amount -->
    <div class="mb-3">
        <label class="form-label">Income Amount ($)</label>
        <input type="number" class="form-control @error('income_amount') is-invalid @enderror" name="income_amount" 
               placeholder="Enter income amount" value="{{ old('income_amount') }}" required>
        @error('income_amount')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <!-- Upload ID -->
    <div class="mb-3">
        <label class="form-label">Upload ID (Driver's License, Passport, etc.)</label>
        <input type="file" class="form-control @error('id_upload') is-invalid @enderror" name="id_upload" 
               accept=".jpg,.jpeg,.png,.pdf" required>
        @error('id_upload')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <!-- Purpose of Filing -->
    <div class="mb-3">
        <label class="form-label">Purpose of Filing</label>
        <select class="form-select @error('purpose') is-invalid @enderror" name="purpose" required>
            <option value="">-- Select Purpose --</option>
            <option value="income_tax" {{ old('purpose') == 'income_tax' ? 'selected' : '' }}>Income Tax Payment</option>
            <option value="business_tax" {{ old('purpose') == 'business_tax' ? 'selected' : '' }}>Business Tax Payment</option>
            <option value="penalty_fee" {{ old('purpose') == 'penalty_fee' ? 'selected' : '' }}>Penalty / Late Fee</option>
            <option value="other" {{ old('purpose') == 'other' ? 'selected' : '' }}>Other</option>
        </select>
        @error('purpose')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <!-- Employment Status -->
    <div class="mb-3">
        <label class="form-label">Employment Status</label>
        <select class="form-select @error('employment_status') is-invalid @enderror" name="employment_status" required>
            <option value="">-- Select Employment Status --</option>
            <option value="employed" {{ old('employment_status') == 'employed' ? 'selected' : '' }}>Employed</option>
            <option value="self_employed" {{ old('employment_status') == 'self_employed' ? 'selected' : '' }}>Self-Employed</option>
            <option value="unemployed" {{ old('employment_status') == 'unemployed' ? 'selected' : '' }}>Unemployed</option>
            <option value="retired" {{ old('employment_status') == 'retired' ? 'selected' : '' }}>Retired</option>
            <option value="student" {{ old('employment_status') == 'student' ? 'selected' : '' }}>Student</option>
        </select>
        @error('employment_status')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <!-- Source of Income -->
    <div class="mb-3">
        <label class="form-label">Source of Income</label>
        <textarea class="form-control @error('source_income') is-invalid @enderror" name="source_income" rows="2" 
                  placeholder="Describe your source(s) of income" required>{{ old('source_income') }}</textarea>
        @error('source_income')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <!-- Submit -->
    <div class="text-center mt-4">
        <button type="submit" class="btn btn-Los Angeles btn-lg">
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