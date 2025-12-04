@extends('layouts.main')

@section('content')

<style>
.skills-section {
    max-width: 1152px; 
    margin: 0 auto;
    padding-top: 64px;
    padding-bottom: 64px;
    padding-left: 24px;
    padding-right: 24px;
}

.skills-header {
    margin-bottom: 56px;
    text-align: center;
}

.skills-title {
    font-size: 3rem; 
    font-weight: 800; 
    margin-bottom: 0.75rem;
    
   
    background-image: linear-gradient(to right, #2563EB, #4F46E5); 
    color: transparent;
    -webkit-background-clip: text;
    background-clip: text;
}

.skills-subtitle {
    font-size: 1.25rem; 
    font-weight: 300; 
    color: #4B5563; 
}

.skills-separator {
    margin-bottom: 40px;
    border-color: #E5E7EB; 
    border-width: 1px;
}

.skills-grid {
    display: grid;
    gap: 48px; 
}
@media (min-width: 1024px) { 
    .skills-grid {
        grid-template-columns: repeat(2, minmax(0, 1fr));
    }
}

.category-title {
    font-size: 1.5rem; 
    font-weight: 700;
    color: #1F2937; 
    margin-bottom: 1.5rem;
    padding-bottom: 0.5rem;
    border-bottom: 2px solid;
}
.programming .category-title {
    border-bottom-color: #6366F1; 
}
.data-science .category-title {
    border-bottom-color: #10B981; 
}

.skill-item {
    margin-bottom: 1.25rem;
}

.skill-header {
    display: flex;
    justify-content: space-between;
    margin-bottom: 0.25rem;
}

.skill-name {
    font-size: 1.125rem; 
    font-weight: 500; 
    color: #374151; 
}

.skill-percentage {
    font-size: 0.875rem;
    font-weight: 600;
    color: #6B7280; 
}

.progress-bar-container {
    width: 100%;
    background-color: #E5E7EB; 
    border-radius: 9999px; 
    height: 10px;
    box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.06); 
}

.progress-bar {
    height: 10px;
    border-radius: 9999px;
    transition: width 1s ease-out;
}
.programming .progress-bar {
    background-color: #4F46E5; 
}
.data-science .progress-bar {
    background-color: #047857;
}

</style>

<section class="skills-section">

    <header class="skills-header">
        <h1 class="skills-title">
            🛠️ My Technical Expertise
        </h1>
        <p class="skills-subtitle">
            A comprehensive overview of my core competencies and tools.
        </p>
    </header>
    
    <hr class="skills-separator">

    <div class="skills-grid">
        
        <div class="programming">
            <h2 class="category-title">
                Programming & Web Development
            </h2>

            <div class="skill-item">
                <div class="skill-header">
                    <span class="skill-name">Python</span>
                    <span class="skill-percentage">80%</span>
                </div>
                <div class="progress-bar-container">
                    <div class="progress-bar" style="width: 80%"></div>
                </div>
            </div>

            <div class="skill-item">
                <div class="skill-header">
                    <span class="skill-name">PHP / Laravel</span>
                    <span class="skill-percentage">70%</span>
                </div>
                <div class="progress-bar-container">
                    <div class="progress-bar" style="width: 70%"></div>
                </div>
            </div>
            
            <div class="skill-item">
                <div class="skill-header">
                    <span class="skill-name">HTML / CSS </span>
                    <span class="skill-percentage">90%</span>
                </div>
                <div class="progress-bar-container">
                    <div class="progress-bar" style="width: 90%"></div>
                </div>
            </div>

            <div class="skill-item">
                <div class="skill-header">
                    <span class="skill-name">JavaScript / Front-end Frameworks</span>
                    <span class="skill-percentage">75%</span>
                </div>
                <div class="progress-bar-container">
                    <div class="progress-bar" style="width: 75%"></div>
                </div>
            </div>
        </div>

        <div class="data-science">
            <h2 class="category-title">
                Data Science & Databases
            </h2>

            <div class="skill-item">
                <div class="skill-header">
                    <span class="skill-name">Machine Learning (Scikit-learn, Keras)</span>
                    <span class="skill-percentage">66%</span>
                </div>
                <div class="progress-bar-container">
                    <div class="progress-bar" style="width: 66%"></div>
                </div>
            </div>

            <div class="skill-item">
                <div class="skill-header">
                    <span class="skill-name">Natural Language Processing (NLP)</span>
                    <span class="skill-percentage">30%</span>
                </div>
                <div class="progress-bar-container">
                    <div class="progress-bar" style="width: 30%"></div>
                </div>
            </div>

            <div class="skill-item">
                <div class="skill-header">
                    <span class="skill-name">SQL (MySQL / PostgreSQL)</span>
                    <span class="skill-percentage">70%</span>
                </div>
                <div class="progress-bar-container">
                    <div class="progress-bar" style="width: 70%"></div>
                </div>
            </div>

            <div class="skill-item">
                <div class="skill-header">
                    <span class="skill-name">Version Control (Git / GitHub)</span>
                    <span class="skill-percentage">50%</span>
                </div>
                <div class="progress-bar-container">
                    <div class="progress-bar" style="width: 50%"></div>
                </div>
            </div>
        </div>

    </div>

</section>

@endsection