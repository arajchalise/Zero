function showShoes() {
            document.getElementById('clothing').style.display = 'none';
            document.getElementById('m_clothing').classList.remove('active');
            document.getElementById('handbag').style.display = 'none';
            document.getElementById('m_handbag').classList.remove('active');
            document.getElementById('accessories').style.display = 'none';
            document.getElementById('m_accessories').classList.remove('active');
            document.getElementById('shoes').style.display = 'block';
            document.getElementById('m_shoes').classList.add("active");
        }
    function showHandbag() {
        document.getElementById('clothing').style.display = 'none';
            document.getElementById('m_clothing').classList.remove('active');
            document.getElementById('handbag').style.display = 'block';
            document.getElementById('m_handbag').classList.add('active');
            document.getElementById('accessories').style.display = 'none';
            document.getElementById('m_accessories').classList.remove('active');
            document.getElementById('shoes').style.display = 'none';
            document.getElementById('m_shoes').classList.remove("active");
    }
    function showaAccessories() {
        document.getElementById('clothing').style.display = 'none';
            document.getElementById('m_clothing').classList.remove('active');
            document.getElementById('handbag').style.display = 'none';
            document.getElementById('m_handbag').classList.remove('active');
            document.getElementById('accessories').style.display = 'block';
            document.getElementById('m_accessories').classList.add('active');
            document.getElementById('shoes').style.display = 'none';
            document.getElementById('m_shoes').classList.remove("active");
    }
    function showClothing() {
        document.getElementById('clothing').style.display = 'block';
            document.getElementById('m_clothing').classList.add('active');
            document.getElementById('handbag').style.display = 'none';
            document.getElementById('m_handbag').classList.remove('active');
            document.getElementById('accessories').style.display = 'none';
            document.getElementById('m_accessories').classList.remove('active');
            document.getElementById('shoes').style.display = 'none';
            document.getElementById('m_shoes').classList.remove("active");
    }

    function showWomenClothing() {
        document.getElementById('fclothing').style.display = 'block';
            document.getElementById('f_clothing').classList.add('active');
            document.getElementById('fhandbag').style.display = 'none';
            document.getElementById('f_handbag').classList.remove('active');
            document.getElementById('faccessories').style.display = 'none';
            document.getElementById('f_accessories').classList.remove('active');
            document.getElementById('fshoes').style.display = 'none';
            document.getElementById('f_shoes').classList.remove("active");
    }

    function showWomenHandbag() {
        document.getElementById('fclothing').style.display = 'none';
            document.getElementById('f_clothing').classList.remove('active');
            document.getElementById('fhandbag').style.display = 'block';
            document.getElementById('f_handbag').classList.add('active');
            document.getElementById('faccessories').style.display = 'none';
            document.getElementById('f_accessories').classList.remove('active');
            document.getElementById('fshoes').style.display = 'none';
            document.getElementById('f_shoes').classList.remove("active");
    }

    function showWomenShoes() {
        document.getElementById('fclothing').style.display = 'none';
            document.getElementById('f_clothing').classList.remove('active');
            document.getElementById('fhandbag').style.display = 'none';
            document.getElementById('f_handbag').classList.remove('active');
            document.getElementById('faccessories').style.display = 'none';
            document.getElementById('f_accessories').classList.remove('active');
            document.getElementById('fshoes').style.display = 'block';
            document.getElementById('f_shoes').classList.add("active");
    }

    function showWomenAccessories() {
        document.getElementById('fclothing').style.display = 'none';
            document.getElementById('f_clothing').classList.remove('active');
            document.getElementById('fhandbag').style.display = 'none';
            document.getElementById('f_handbag').classList.remove('active');
            document.getElementById('faccessories').style.display = 'block';
            document.getElementById('f_accessories').classList.add('active');
            document.getElementById('fshoes').style.display = 'none';
            document.getElementById('f_shoes').classList.remove("active");
    }

    function showHelmet() {
        document.getElementById('helmet').style.display = 'block';
            document.getElementById('r_helmet').classList.add("active");
            document.getElementById('gloves').style.display = 'none';
            document.getElementById('r_gloves').classList.remove('active');
            document.getElementById('rshoes').style.display = 'none';
            document.getElementById('r_shoes').classList.remove('active');
            document.getElementById('jacket').style.display = 'none';
            document.getElementById('r_jacket').classList.remove("active");
    }

    function showGloves() {
        document.getElementById('helmet').style.display = 'none';
            document.getElementById('r_helmet').classList.remove('active');
            document.getElementById('gloves').style.display = 'block';
            document.getElementById('r_gloves').classList.add('active');
            document.getElementById('rshoes').style.display = 'none';
            document.getElementById('r_shoes').classList.remove('active');
            document.getElementById('jacket').style.display = 'none';
            document.getElementById('r_jacket').classList.remove("active");
    }

    function showRidingShoes() {
        document.getElementById('helmet').style.display = 'none';
            document.getElementById('r_helmet').classList.remove('active');
            document.getElementById('gloves').style.display = 'none';
            document.getElementById('r_gloves').classList.remove('active');
            document.getElementById('rshoes').style.display = 'block';
            document.getElementById('r_shoes').classList.add('active');
            document.getElementById('jacket').style.display = 'none';
            document.getElementById('r_jacket').classList.remove("active");
    }

    function showJacket() {
        document.getElementById('helmet').style.display = 'none';
            document.getElementById('r_helmet').classList.remove("active");
            document.getElementById('gloves').style.display = 'none';
            document.getElementById('r_gloves').classList.remove("active");
            document.getElementById('rshoes').style.display = 'none';
            document.getElementById('r_shoes').classList.remove("active");
            document.getElementById('jacket').style.display = 'block';
            document.getElementById('r_jacket').classList.add("active");
    }
