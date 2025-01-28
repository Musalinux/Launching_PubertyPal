document.addEventListener('DOMContentLoaded', function () {
    const indianCharities = [
        { name: "Goonj", link: "https://goonj.org/category/health/", imageUrl: "../images/charity.jpg", flagUrl: "../images/india.svg", category: "india" },
        { name: "ASA Cup", link: "https://asancup.com/blogs/blogs/six-organisations-fighting-period-poverty-in-india", imageUrl: "../images/charity.jpg", flagUrl: "../images/india.svg", category: "india" },
        { name: "Bela Kutrust", link: "https://www.belakutrust.org/programs", imageUrl: "../images/charity.jpg", flagUrl: "../images/india.svg", category: "india" },
        { name: "Jatan Sansthan", link: "https://jatansansthan.org/adolescents-and-young-people/", imageUrl: "../images/charity.jpg", flagUrl: "../images/india.svg", category: "india" },
        { name: "Pad and Prejudice", link: "https://www.facebook.com/padandprejudice/", imageUrl: "../images/charity.jpg", flagUrl: "../images/india.svg", category: "india" },
        { name: "The Cycle World", link: "https://www.thecycle.world/our-work/women", imageUrl: "../images/charity.jpg", flagUrl: "../images/india.svg", category: "india" },
        { name: "Eco Femme", link: "https://ecofemme.org/", imageUrl: "../images/charity.jpg", flagUrl: "../images/india.svg", category: "india" },
        { name: "Global Giving", link: "https://www.globalgiving.org/projects/girls-glory-improve-menstrual-health-in-india/", imageUrl: "../images/charity.jpg", flagUrl: "../images/india.svg", category: "india" },
        { name: "Akshaya Patra", link: "https://www.akshayapatra.org/", imageUrl: "../images/charity.jpg", flagUrl: "../images/india.svg", category: "india" },
        { name: "Barefoot College", link: "https://www.barefootcollege.org/", imageUrl: "../images/charity.jpg", flagUrl: "../images/india.svg", category: "india" },
        { name: "Women of Worth", link: " https://womenofworth.in/volunteer/", imageUrl: "../images/charity.jpg", flagUrl: "../images/india.svg", category: "india" },
        { name: "DEF India", link: "https://www.defindia.org/education-empowerment-2/", imageUrl: "../images/charity.jpg", flagUrl: "../images/india.svg", category: "india" },
        { name: "Give missions", link: "https://give.do/missions/mission-every-girl-in-school?utm_content=homepage_mission_section&utm_position=5", imageUrl: "../images/charity.jpg", flagUrl: "../images/india.svg", category: "india" },
        { name: "Milaan Foundation", link: "https://milaanfoundation.org/", imageUrl: "../images/charity.jpg", flagUrl: "../images/india.svg", category: "india" },
        { name: "Ibtada Foundation", link: "https://www.ibtada.in/", imageUrl: "../images/charity.jpg", flagUrl: "../images/india.svg", category: "india" },
        { name: "Ek Tara", link: "http://www.ektara.org.in/", imageUrl: "../images/charity.jpg", flagUrl: "../images/india.svg", category: "india" },
        { name: "Global Giving", link: "https://www.akshayapatra.org/", imageUrl: "../images/charity.jpg", flagUrl: "../images/india.svg", category: "india" },
        { name: "ActionAid India", link: "https://www.actionaid.org.uk/about-us/where-we-work/india", imageUrl: "../images/charity.jpg", flagUrl: "../images/india.svg", category: "india" }
        
    ];

    const globalCharities = [
        { name: "LHM UK Puberty", link: "https://www.lhm.org.uk/puberty/", imageUrl: "../images/charity.jpg", flagUrl: "../images/ukflag.svg", category: "global" },
        { name: "British Asian Trust", link: "https://www.britishasiantrust.org/our-work/education/empowering-adolescent-girls-through-technology/", imageUrl: "../images/charity.jpg", flagUrl: "../images/ukflag.svg", category: "global" },
        { name: "Malala Fund", link: "https://malala.org/girl-programme?sc=header", imageUrl: "../images/charity.jpg", flagUrl: "../images/usflag.svg", category: "global" },
        { name: "Euro Child Activists", link: "https://www.eurochild.org/news/becoming-a-young-activist-is-still-a-challenge-especially-when-youre-a-girl/", imageUrl: "../images/charity.jpg", flagUrl: "../images/belgium.svg", category: "global" },
        { name: "Always Education Program", link: "https://www.always.com/en-us/about-us/providing-puberty-education-and-access-to-period-products", imageUrl: "../images/charity.jpg", flagUrl: "../images/ukflag.svg", category: "global" },
        { name: "ActionAid Women's Rights", link: "https://www.actionaid.org.uk/our-work/womens-rights/adolescent-girls", imageUrl: "../images/charity.jpg", flagUrl: "../images/ukflag.svg", category: "global" },
        { name: "Rites for Girls", link: "https://www.thepotentialtrust.org.uk/partners/rites-for-girls/", imageUrl: "../images/charity.jpg", flagUrl: "../images/ukflag.svg", category: "global" },
        { name: "Habitat for Humanity", link: "https://www.habitatforhumanity.org.uk/too-scared-to-go/", imageUrl: "../images/charity.jpg", flagUrl: "../images/ukflag.svg", category: "global" },
        { name: "Girls Out Loud", link: "https://girlsoutloud.org.uk/", imageUrl: "../images/charity.jpg", flagUrl: "../images/ukflag.svg", category: "global" },
        { name: "Young Minds", link: "https://www.youngminds.org.uk/", imageUrl: "../images/charity.jpg", flagUrl: "../images/ukflag.svg", category: "global" },
        { name: "Dove Self-Esteem Project", link: "https://www.dove.com/uk/dove-self-esteem-project.html", imageUrl: "../images/charity.jpg", flagUrl: "../images/usflag.svg", category: "global" },
        { name: "Sweaty Betty Foundation", link: "https://participationpeople.com/using-youth-voice-training-to-help-young-women-stay-active-for-life-with-sweaty-betty-foundation/", imageUrl: "../images/charity.jpg", flagUrl: "../images/ukflag.svg", category: "global" },
        { name: "Rett Syndrome", link: "https://www.rettsyndrome.org/for-families/living-with-rett/adolescence-beyond/", imageUrl: "../images/charity.jpg", flagUrl: "../images/usflag.svg", category: "global" },
        { name: "Nike Sports", link: "https://www.nike.com/gb/a/sports-girls-puberty", imageUrl: "../images/charity.jpg", flagUrl: "../images/usflag.svg", category: "global" },
        { name: "UNICEF", link: "https://www.unicef.org/", imageUrl: "../images/charity.jpg", flagUrl: "../images/ukflag.svg", category: "global" }
    ];

    function generateLinks(containerId, charities) {
        const container = document.getElementById(containerId);
        charities.forEach(charity => {
            const item = document.createElement('div');
            item.className = 'link-item';
            item.innerHTML = `
                <img src="${charity.flagUrl}" alt="${charity.name}">
                <a href="${charity.link}" target="_blank">${charity.name}</a>
            `;
            container.appendChild(item);
        });
    }

    generateLinks('indian-charities', indianCharities);
    generateLinks('global-charities', globalCharities);
});
