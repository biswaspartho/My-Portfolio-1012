@extends('layouts.main')

<script src="https://cdn.tailwindcss.com"></script>


@section('content')

<section class="max-w-7xl mx-auto py-16 px-6">

    <header class="mb-10 text-center">
        <h1 class="text-4xl sm:text-5xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-teal-500 mb-2">
            🚀 My Project Showcase
        </h1>
        <p class="text-xl sm:text-2xl font-medium text-gray-700">
            A selection by Partho
        </p>
    </header>

    <hr class="mb-10 border-gray-200">

    <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-8" id="projectGrid">

        <div class="project-card bg-white shadow-lg rounded-xl p-6 cursor-pointer transform transition hover:-translate-y-2 hover:shadow-2xl">
            <h3 class="text-xl font-semibold text-gray-800 mb-3">AI Text Generator</h3>
            <p class="text-gray-600 text-sm">A smart AI-powered text generation tool using NLP models.</p>
        </div>

        <div class="project-card bg-white shadow-lg rounded-xl p-6 cursor-pointer transform transition hover:-translate-y-2 hover:shadow-2xl">
            <h3 class="text-xl font-semibold text-gray-800 mb-3">Fabric Recognition System</h3>
            <p class="text-gray-600 text-sm">A machine learning model to classify fabric types using image data.</p>
        </div>

        <div class="project-card bg-white shadow-lg rounded-xl p-6 cursor-pointer transform transition hover:-translate-y-2 hover:shadow-2xl">
            <h3 class="text-xl font-semibold text-gray-800 mb-3">Fraud Detection</h3>
            <p class="text-gray-600 text-sm">Detects fraudulent transactions using ML classification algorithms.</p>
        </div>

        <div class="project-card bg-white shadow-lg rounded-xl p-6 cursor-pointer transform transition hover:-translate-y-2 hover:shadow-2xl">
            <h3 class="text-xl font-semibold text-gray-800 mb-3">Portfolio Website</h3>
            <p class="text-gray-600 text-sm">A personal website built with Laravel, Blade, and Tailwind CSS.</p>
        </div>

        <div class="project-card bg-white shadow-lg rounded-xl p-6 cursor-pointer transform transition hover:-translate-y-2 hover:shadow-2xl">
            <h3 class="text-xl font-semibold text-gray-800 mb-3">Zoo Field Report App</h3>
            <p class="text-gray-600 text-sm">A structured report system based on field visit data and images.</p>
        </div>

        <div class="project-card bg-white shadow-lg rounded-xl p-6 cursor-pointer transform transition hover:-translate-y-2 hover:shadow-2xl">
            <h3 class="text-xl font-semibold text-gray-800 mb-3">Heart Failure Prediction</h3>
            <p class="text-gray-600 text-sm">A decision tree model that predicts heart failure risk.</p>
        </div>

    </div>

</section>

<script>
    const cards = document.querySelectorAll(".project-card");
    cards.forEach(card => {
        card.addEventListener("mouseover", () => { here.
            card.classList.add("scale-105"); 
        });
        card.addEventListener("mouseout", () => {
            card.classList.remove("scale-105");
        });
    });
</script>

@endsection