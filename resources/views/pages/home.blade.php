@extends('layouts.main')

@section('content')

<style>
:root {
    --color-primary: #1F2937; 
    --color-secondary: #06B6D4; 
    --color-text-light: #4B5563; 
    --color-background: #F9FAFB;
}
.hero-container {
    background-color: var(--color-background);
    padding-top: 100px;
    padding-bottom: 50px;
}

.hero-wrapper {
    max-width: 1000px; 
    margin: 0 auto;
    padding-left: 24px;
    padding-right: 24px;
    
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 40px;
}
@media (min-width: 768px) {
    .hero-wrapper {
        flex-direction: row; 
        justify-content: space-between;
        align-items: flex-start;
    }
}

.hero-image-area {
    width: 180px;
    height: 180px;
    border-radius: 50%;
    border: 4px solid var(--color-secondary);
    overflow: hidden;
    flex-shrink: 0;
    box-shadow: 0 5px 12px rgba(0, 0, 0, 0.15);
    order: -1; 
}
@media (min-width: 768px) {
    .hero-image-area {
        order: 0; 
        margin-right: 40px;
    }
}

.hero-image-area img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.hero-text-content {
    max-width: 600px; 
    flex-grow: 1;
}

.hero-title-main {
    font-size: 3rem;
    font-weight: 800;
    color: var(--color-primary);
    margin-bottom: 0.5rem;
}

.hero-title-highlight {
    color: var(--color-secondary);
}

.hero-subtitle-tag {
    font-size: 1.25rem;
    color: var(--color-secondary);
    font-weight: 600;
    margin-bottom: 1.5rem;
    display: block;
}

.hero-description-intro {
    font-size: 1.125rem;
    color: var(--color-text-light);
    line-height: 1.6;
}

.about-section-container {
    max-width: 1000px; 
    margin: 0 auto;
    padding-top: 50px;
    padding-bottom: 80px;
    padding-left: 24px;
    padding-right: 24px;
    background-color: #FFFFFF;
}

.about-title-section {
    font-size: 2.25rem;
    font-weight: 700;
    color: var(--color-primary);
    margin-bottom: 1.5rem;
    border-bottom: 2px solid var(--color-secondary);
    display: inline-block;
    padding-bottom: 0.25rem;
}

.about-paragraph-content {
    color: var(--color-text-light);
    line-height: 1.7;
    font-size: 1.125rem;
    margin-top: 1rem;
}
</style>

<section class="hero-container">
    <div class="hero-wrapper">
        <div class="hero-image-area">
            <img src="https://images.unsplash.com/photo-1703248187251-c897f32fe4ec?fm=jpg&q=60&w=3000&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8cGFuZGElMjBiZWFyfGVufDB8fDB8fHww" 
                 alt="Profile Image">
        </div>

        <div class="hero-text-content">
            <span class="hero-subtitle-tag">Web Developer | Learner</span>
            
            <h1 class="hero-title-main">
                Hi, I'm <span class="hero-title-highlight">Partho</span>
            </h1>
            
            <p class="hero-description-intro">
                I specialize in building modern, responsive web applications using Laravel, PHP, and advanced backend technologies. I also actively work on data science and machine learning projects that combine practical innovation with problem-solving.
            </p>
        </div>

    </div>
</section>

<section class="about-section-container">
    <h2 class="about-title-section">About Me</h2>

    <p class="about-paragraph-content">
        I'm Partho, a dedicated web development learner who loves creating impactful solutions through code.
        Over the years, I’ve gained hands-on experience in building real-world applications, 
        optimizing workflows, and experimenting with advanced tech like AI, machine learning,
        and full-stack development. 
    </p>

    <p class="about-paragraph-content">
        My journey in programming is fueled by curiosity, continuous learning, and the ambition to build 
        software that truly makes a difference. Whether it’s backend logic, UI/UX, or working 
        with APIs and databases, I enjoy every part of the development process.
    </p>
</section>

@endsection
