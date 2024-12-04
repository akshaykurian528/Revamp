import * as THREE from 'https://cdn.skypack.dev/three@0.134.0';
import { GLTFLoader } from 'https://cdn.skypack.dev/three@0.134.0/examples/jsm/loaders/GLTFLoader.js';

// Initialize Lenis for smooth scrolling
const lenis = new Lenis();
lenis.on("scroll", ScrollTrigger.update);
gsap.ticker.add((time) => {
    lenis.raf(time * 1000);
});
gsap.ticker.lagSmoothing(0);

// Setup Three.js scene
const scene = new THREE.Scene();
scene.background = null;

// Add lighting
const ambientLight = new THREE.AmbientLight(0xffffff, 1);
scene.add(ambientLight);

const directionalLight = new THREE.DirectionalLight(0xffffff, 1.5);
directionalLight.position.set(2, 2, 2).normalize();
scene.add(directionalLight);

// Camera setup
const camera = new THREE.PerspectiveCamera(50, window.innerWidth / window.innerHeight, 0.1, 1000);

// WebGL renderer setup
const renderer = new THREE.WebGLRenderer({ antialias: true, alpha: true });
renderer.setClearColor(0x000000, 0);
renderer.setSize(window.innerWidth, window.innerHeight);
renderer.setPixelRatio(window.devicePixelRatio);
document.querySelector(".model").appendChild(renderer.domElement);

// Responsive resize
window.addEventListener('resize', () => {
    camera.aspect = window.innerWidth / window.innerHeight;
    camera.updateProjectionMatrix();
    renderer.setSize(window.innerWidth, window.innerHeight);
});

// Scroll progress tracking
let currentScroll = 0;
let rotationComplete = false;
let isModelSticky = false;
let scrollTriggerInstance;

lenis.on("scroll", (e) => {
    currentScroll = e.scroll;
});

// Load GLTF model
let model;
const loader = new GLTFLoader();
loader.load("/models/car_3d_model.glb", (gltf) => {
    model = gltf.scene;
    model.traverse((node) => {
        if (node.isMesh) {
            if (node.material) {
                node.material.metalness = 0.4;
                node.material.roughness = 0.3;
                node.material.envMapIntensity = 2;
            }
            node.castShadow = true;
            node.receiveShadow = true;
        }
    });

    const box = new THREE.Box3().setFromObject(model);
    const center = box.getCenter(new THREE.Vector3());
    model.position.sub(center);
    scene.add(model);

    const size = box.getSize(new THREE.Vector3());
    const maxDim = Math.max(size.x, size.y, size.z);
    camera.position.z = maxDim * 4;

    // Initial scaling animation
    const initialScale = 2.10;
    model.scale.set(0, 0, 0);
    gsap.to(model.scale, {
        x: initialScale,
        y: initialScale,
        z: initialScale,
        duration: 1,
        ease: "power2.out",
    });

    // Create ScrollTrigger for the .service section and animate the model along with it
    const scrollTriggerInstance = ScrollTrigger.create({
        trigger: ".service",
        start: "top top",    // Start when .service section's top hits the top of the viewport
        end: "+=1000",       // Scroll distance for the sticky effect
        pinSpacing: false,   // No extra spacing
        anticipatePin: 1,    // Smoother pinning
        onUpdate: (self) => {
            const progress = self.progress; // Progress of the scroll trigger (0 to 1)

            // Sync model movement with scroll progress and adjust speed
            gsap.to(model.position, {
                y: progress * 45,  // Adjust this to control how far the model moves up
                duration: 0.2,        // A longer duration for smoother movement
                ease: "power1.inOut", // Smooth easing for gradual movement
            });
        },
        onEnter: () => {
            isModelSticky = true;
        },
        onLeave: () => {
            isModelSticky = true;
        },
        onEnterBack: () => {
            isModelSticky = true;
        },
        onLeaveBack: () => {
            isModelSticky = true;
        },
    });


    animate();
});

// Animation loop
function animate() {
    if (model) {
        const scrollProgress = Math.min(currentScroll / window.innerHeight, 1);

        // Initial X-axis rotation based on scroll progress
        if (!rotationComplete) {
            model.rotation.x = scrollProgress * Math.PI * 0.5;  // Rotate the model on X-axis

            // After the X-axis rotation, perform a counterclockwise 1/4 rotation on the Y-axis
            if (scrollProgress >= 1) {
                rotationComplete = true;  // Mark rotation as complete
                
                // Perform the counterclockwise rotation (90 degrees) on the Y-axis
                gsap.to(model.rotation, {
                    y: model.rotation.y + Math.PI / 2,  // Rotate 90 degrees counterclockwise on Y-axis
                    duration: 1,  // Duration of the rotation
                    ease: "power2.out",  // Smooth easing
                    onComplete: () => {
                        // Fix the model's rotation (keep it in place after rotation)
                        gsap.to(model.rotation, {
                            y: model.rotation.y,  // No change in the rotation, so it stays fixed
                            duration: 0,  // Instant fix (no further movement)
                        });
                    }
                });
            }
        }

        // Render the scene
        renderer.render(scene, camera);
        requestAnimationFrame(animate);
    }
}

// Optional: Refresh ScrollTrigger on resize to ensure correct calculations
window.addEventListener('resize', () => {
    ScrollTrigger.refresh();
});