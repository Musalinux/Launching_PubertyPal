document.addEventListener("DOMContentLoaded", function() {
    const tags = [
        { name: "normal mood swings", url: "./topics/body/learn.php" },
        { name: "learning about girls' bodies", url: "./topics/body/learn.php" },
        { name: "where babies come from", url: "./topics/body/rep.php" },
        { name: "Tanner stages", url: "./topics/body/stages.php" },
        { name: "managing own period", url: "./topics/hygiene/hygiene.php" },
        { name: "using social media", url: "./topics/mental/socialmedia.php" },
        { name: "mental wellness", url: "./topics/mental/stress.php" },
        { name: "sports tips", url: "./topics/mental/sports.php" },
        { name: "using a tampon", url: "./topics/hygiene/hygiene.php" },
        { name: "body hair", url: "./topics/body/learn.php" },
        { name: "what's a uterus?", url: "./topics/body/rep.php" },
        { name: "interacting with new people", url: "./topics/mental/socialmedia.php" },
        { name: "playing with a pad on", url: "./topics/mental/sports.php" },
        { name: "menstrual cups", url: "./topics/hygiene/hygiene.php" },
        { name: "development of breasts", url: "./topics/body/learn.php" },
        { name: "stages of puberty", url: "./topics/body/stages.php" },
        { name: "period discomfort", url: "./topics/body/rep.php" },
        { name: "sanitary napkins", url: "./topics/hygiene/hygiene.php" },
        { name: "managing stress", url: "./topics/mental/stress.php" }
        
    ];
    const tagsContainer = document.getElementById("tagsContainer");

    tags.forEach(tag => {
        const tagElement = document.createElement('div');
        tagElement.textContent = tag.name;
        tagElement.classList.add('tag');
        tagElement.onclick = function() { window.location.href = tag.url; };
        tagsContainer.appendChild(tagElement);
    });
});

function filterTags() {
    let input = document.getElementById('searchInput');
    let filter = input.value.toLowerCase();
    let nodes = document.getElementsByClassName('tag');
    Array.from(nodes).forEach(function(node) {
        if (node.textContent.toLowerCase().includes(filter)) {
            node.style.display = 'inline-block';
        } else {
            node.style.display = 'none';
        }
    });
}
