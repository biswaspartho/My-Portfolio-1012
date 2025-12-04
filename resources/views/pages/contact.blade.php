@extends('layouts.main')

@section('content')

<style>
.contact-section {
    max-width: 900px; 
    margin: 0 auto;
    padding-top: 64px;
    padding-bottom: 64px;
    padding-left: 24px;
    padding-right: 24px;
}

.contact-header {
    margin-bottom: 48px; 
    text-align: center;
}

.contact-title {
    font-size: 3rem; 
    font-weight: 800; 
    margin-bottom: 0.5rem;
    
    background-image: linear-gradient(to right, #10B981, #2563EB); 
    color: transparent;
    -webkit-background-clip: text;
    background-clip: text;
}

.contact-subtitle {
    font-size: 1.25rem; 
    color: #4B5563; 
}

.contact-card-wrapper {
    max-width: 512px; 
    margin: 0 auto; 
}

.contact-card {
    background-color: #FFFFFF; 
    box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04); /* shadow-2xl */
    border-radius: 0.75rem; 
    padding: 2rem; 
    display: flex;
    flex-direction: column;
    gap: 1.5rem; 
    border-top: 4px solid #10B981; 
}

.contact-item {
    display: flex;
    align-items: center; 
    gap: 1rem; 
}

.contact-icon {
    font-size: 1.5rem; 
    color: #10B981; 
}

.contact-label {
    font-size: 1.125rem; 
    font-weight: 700; 
    color: #1F2937; 
}

.contact-detail {
    font-size: 1rem; 
    color: #4B5563; 
}

.contact-footer {
    margin-top: 3rem; 
    text-align: center;
    color: #6B7280; 
}
</style>

<section class="contact-section">

    <header class="contact-header">
        <h1 class="contact-title">
            Connect Me
        </h1>
        <p class="contact-subtitle">
            I'm always open to discussing new projects, opportunities, or ideas.
        </p>
    </header>

    <div class="contact-card-wrapper"> 
        <div class="contact-card">
            
            <div class="contact-item">
                <span class="contact-icon">👤</span> <div>
                    <h3 class="contact-label">Name</h3>
                    <p class="contact-detail">Partho Biswas</p>
                </div>
            </div>

            <div class="contact-item">
                <span class="contact-icon">📞</span> <div>
                    <h3 class="contact-label">Phone</h3>
                    <p class="contact-detail">+880 1623995382</p>
                </div>
            </div>

            <div class="contact-item">
                <span class="contact-icon">📧</span> <div>
                    <h3 class="contact-label">Email</h3>
                    <p class="contact-detail">biswas22205101012@diu.edu.bd</p>
                </div>
            </div>

            <div class="contact-item">
                <span class="contact-icon">📍</span> <div>
                    <h3 class="contact-label">Address</h3>
                    <p class="contact-detail">Dhaka, Bangladesh</p>
                </div>
            </div>
            
        </div>
    </div>
    
    <div class="contact-footer">
        <p>Your message is important to me. I will respond as quickly as possible.</p>
    </div>

</section>

@endsection