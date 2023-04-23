
     
        var stateObject = {
        "India": { "Andra Pradesh": [
        "Anantapur","Chittoor","East Godavari","Guntur","Krishna","Kumoo","PrakasamSrikakulam","Sri PottiSriramulu Nellore","Visakhapatnam","Vizianagaram","West Godavari","YSR District,Kadapa (Cuddapah)"],
        "Arunachal Pradesh": ["Anjaw","Changlang","Dibang Valley","East Kameng","East Siang","KraDaadi","KurungKumey","LepaRada","Lohit","Longding","Lower Dibang Valley","Lower Siang","Lower Subansiri","Namsai","PakkeKessang","PapumPare","Shi Yomi","Siang","Tawang","Tirap","Upper Siang","Upper Subansiri","West Kameng","West Siang"],
        "Aasam": ["Baksa","Barpeta","Biswanath","Bongaigaon","Cachar","Charaideo","Chirang","Darrang","Dhemaji","Dhubri","Dibrugarh","DimaHasao (North Cachar Hills)","Goalpara","Golaghat","Hailakandi","Hojai","Jorhat","Kamrup","Kamrup Metropolitan","KarbiAnglong","Karimganj","Kokrajhar","Lakhimpur","Majuli","Morigaon","Nagaon","Nalbari","Sivasagar","Sonitpur",
        "South Salamara-Mankachar","Tinsukia","Udalguri","West KarbiAnglong"],
        "Bihar": ["Araria","Arwal","Aurangabad","Banka","Begusarai","Bhagalpur","Bhojpur","Buxar","Darbhanga","East Champaran (Motihari)","Gaya","Gopalganj","Jamui","Jehanabad","Kaimur (Bhabua)","Katihar","Khagaria","Kishanganj","Lakhisarai","Madhepura","Madhubani","Munger (Monghyr)","Muzaffarpur","Nalanda","Nawada","Patna","Purnia (Purnea)","Rohtas","Saharsa","Samastipur","Saran","Sheikhpura","Sheohar","Sitamarhi","Siwan","Supaul","Vaishali","West Champaran"],
        "Chandigrah": ["Chandigrah"],
        "Chhattisgarh": ["Balod","Baloda Bazar","Balrampur","Bastar","Bemetara","Bijapur","Bilaspur","Dantewada (South Bastar)","Dhamtari","Durg","Gariyaband","Janjgir-Champa","Jashpur","Kabirdham (Kawardha)","Kanker (North Bastar)","Kondagaon","Korba","Korea (Koriya)","Mahasamund","Mungeli","Narayanpur","Raigarh","Raipur","Rajnandgaon","Sukma","Surajpur","Surguja"],
        " Dadar & Nagar Haveli": ["Dadra & Nagar Haveli"],
        " Daman & Diu": ["Daman & Diu"],
        " Delhi ": ["Central Delhi","East Delhi","New Delhi","North Delhi","North East Delhi","North West Delhi","Shahdara","South Delhi","South East Delhi","South West Delhi","West Delhi"],
        " Goa ": ["North Goa","South Goa"],
        
        " Gujrat  ": ["Ahmedabad","Amreli","Anand","Aravalli","Banaskantha (Palanpur)","Bharuch","Bhavnagar","Botad","ChhotaUdepur","Dahod","Dangs(Ahwa)","DevbhoomiDwarka","Gandhinagar","GirSomnath","Jamnagar","Junagadh","Kachchh","Kheda(Nadiad)","Mahisagar","Mehsana","Morbi","Narmada (Rajpipla)","Navsari","Panchmahal (Godhra)","Patan","Porbandar","Rajkot","Sabarkantha (Himmatnagar)","Surat","Surendranagar","Tapi (Vyara)","Vadodara","Valsad"],
        "Haryana": ["Ambala","Bhiwani","CharkhiDadri","Faridabad","Fatehabad","Gurgaon","Hisar","Jhajjar","Jind","Kaithal","Karnal","Kurukshetra","Mahendragarh","Mewat","Palwal","Panchkula","Panipat","Rewari","Rohtak","Sirsa","Sonipat","Yamunanagar"],
        " Himachal Pradesh": ["Bilaspur","Chamba","Hamirpur","Kangra","Kinnaur","Kullu","Lahaul&Spiti","Mandi","Shimla","Sirmaur (Sirmour)","Solan","Una"],
        " JAMMU AND KASHMIR": ["Anantnag","Bandipore","Baramulla","Budgam","Doda","Ganderbal","Jammu","Kargil","Kathua","Kishtwar","Kulgam","Kupwara","Leh","Poonch","Pulwama","Rajouri","Ramban","Reasi","Samba","Shopian","Srinagar","Udhampur"],
        " Jharkhand ": ["Bokaro","Chatra","Deoghar","Dhanbad","Dumka","East Singhbhum","Garhwa","Giridih","Godda","Gumla","Hazaribag","Jamtara","Khunti","Koderma","Latehar","Lohardaga","Pakur","Palamu","Ramgarh","Ranchi","Sahibganj","Seraikela-Kharsawan","Simdega","West Singhbhum"],
        " Karnataka  ": ["Bagalkot","Ballari (Bellary)","Belagavi (Belgaum)","Bengaluru (Bangalore) Rural","Bengaluru (Bangalore) Urban","Bidar","Chamarajanagar","Chikballapur","Chikkamagaluru (Chikmagalur)","Chitradurga","Dakshina Kannada","Davangere","Dharwad","Gadag","Hassan","Haveri","Kalaburagi (Gulbarga)","Kodagu","Kolar","Koppal","Mandya","Mysuru (Mysore)","Raichur","Ramanagara","Shivamogga (Shimoga)","Tumakuru (Tumkur)","Udupi","Uttara Kannada (Karwar)","Vijayapura (Bijapur)","Yadgir"],
        " Kerala": ["Alappuzha","Ernakulam","Idukki","Kannur","Kasaragod","Kollam","Kottayam","Kozhikode","Malappuram","Palakkad","Pathanamthitta","Thiruvananthapuram","Thrissur","Wayanad"],
        " Lakshyadeep ": ["Lakshadweep"],
        " Madhya Pradesh": ["Agar Malwa","Alirajpur","Anuppur","Ashoknagar","Balaghat","Barwani","Betul","Bhind","Bhopal","Burhanpur","Chhatarpur","Chhindwara","Damoh","Datia","Dewas","Dhar","Dindori","Guna","Gwalior","Harda","Hoshangabad","Indore","Jabalpur","Jhabua","Katni","Khandwa","Khargone","Mandla","Mandsaur","Morena","Narsinghpur","Neemuch","Panna","Raisen","Rajgarh","Ratlam","Rewa","Sagar","Satna","Sehore","Seoni","Shahdol","Shajapur","Sheopur","Shivpuri","Sidhi","Singrauli","Tikamgarh","Ujjain","Umaria","Vidisha"],
        " Maharastra ": ["Ahmednagar","Akola","Amravati","Aurangabad","Beed","Bhandara","Buldhana","Chandrapur","Dhule","Gadchiroli","Gondia","Hingoli","Jalgaon","Jalna","Kolhapur","Latur","Mumbai City","Mumbai Suburban","Nagpur","Nanded","Nandurbar","Nashik","Osmanabad","Palghar","Parbhani","Pune","Raigad","Ratnagiri","Sangli","Satara","Sindhudurg","Solapur","Thane","Wardha","Washim","Yavatmal"],
        " Manipur  ": ["Bishnupur","Chandel","Churachandpur","Imphal East","ImphalWest","Jiribam","Kakching","Kamjong","Kangpokpi","Noney","Pherzawl","Senapati","Tamenglong","Tengnoupal","Thoubal","Ukhrul"],
        " Meghalaya ": ["East Garo Hills","East Jaintia Hills","East KhasiHills","North Garo Hills","RiBhoi","South Garo Hills","South West Garo Hills","South West Khasi Hills","West Garo Hills","West Jaintia Hills","West Khasi Hills"],
        " Mizoram": ["Aizawl","Champhai","Kolasib","Lawngtlai","Lunglei","Mamit","Saiha","Serchhip"],
        " Nagaland ": ["Dimapur","Kiphire","Kohima","Longleng","Mokokchung","Mon","Peren","Phek","Tuensang","Wokha","Zunheboto"],
        " ODISHA": ["Angul","Balangir","Balasore","Bargarh","Bhadrak","Boudh","Cuttack","Deogarh","Dhenkanal","Gajapati","Ganjam","Jagatsinghapur","Jajpur","Jharsuguda","Kalahandi","Kandhamal","Kendrapara","Kendujhar(Keonjhar)","Puri","Rayagada","Sambalpur","Sonepur","Sundargarh"],
        " PUDUCHERRY (UT)J-R": ["Karaikal","Mahe","Pondicherry","Yanam"],
        " PUNJAB ": ["Amritsar","Barnala","Bathinda","Faridkot","Fatehgarh Sahib","Fazilka","Ferozepur","Gurdaspur","Hoshiarpur","Jalandhar","Kapurthala","Ludhiana","Mansa","Moga","Muktsar","Nawanshahr (ShahidBhagat Singh Nagar)","Pathankot","Patiala","Rupnagar","SahibzadaAjit Singh Nagar (Mohali)","Sangrur","Tarn Taran"],
        " RAJASTHANA  ": ["Ajmer","Alwar","Banswara","Baran","Barmer","Bharatpur","Bhilwara","Bikaner","Bundi","Chittorgarh","Churu","Dausa","Dholpur","Dungarpur","Hanumangarh","Jaipur","Jaisalmer","Jalore","Jhalawar","Jhunjhunu","Jodhpur","Karauli","Kota","Nagaur","Pali","Pratapgarh","Rajsamand","SawaiMadhopur","Sikar","Sirohi","Sri Ganganagar","Tonk","Udaipur"],
        " SIKKIM": ["East Sikkim","North Sikkim","South Sikkim","West Sikkim"],
        "TAMILNADU ": ["Ariyalur","Chennai","Coimbatore","Cuddalore","Dharmapuri","Dindigul","Erode","Kanchipuram","Kanyakumari",
        "Karur","Krishnagiri","Madurai","Nagapattinam","Namakkal","Nilgiris","Perambalur","Pudukkottai","Ramanathapuram","Salem","Sivaganga","Thanjavur","Theni","Thoothukudi (Tuticorin)","Tiruchirappalli","Tirunelveli","Tiruppur","Tiruvallur","Tiruvannamalai","Tiruvarur","Vellore","Viluppuram","Virudhunagar"],
        "TELANGANA ": ["Adilabad","BhadradriKothagudem","Hyderabad","Jagtial","Jangaon","Jayashankar Bhoopalpally","JogulambaGadwal","Kamareddy","Karimnagar","Khammam","KomaramBheem Asifabad","Mahabubabad","Mahabubnagar","Mancherial","Medak","Medchal","Nagarkurnool","Nalgonda","Nirmal","Nizamabad","Peddapalli","Rajannasircilla","Rangareddy","Sangareddy","Siddipet","Suryapet","Vikarabad","Wanaparthy","Warangal (Rural)","Warangal (Urban)","YadadriBhuvanagiri"],
        "TRIPURA  ": ["Dhalai","Gomati","Khowai","North Tripura","Sepahijala","South Tripura","Unakoti","West Tripura"],
        "UTTARAKHAND": ["Almora","Bageshwar","Chamoli","Champawat","Dehradun","Haridwar","Nainital","PauriGarhwal","Pithoragarh","Rudraprayag","TehriGarhwal","Udham Singh Nagar","Uttarkashi"],
        "UTTAR PRADESH": ["Agra","Aligarh","Allahabad","Ambedkar Nagar","Amethi (ChatrapatiSahujiMahraj Nagar)","Amroha (J.P. Nagar)","Auraiya","Azamgarh","Baghpat","Bahraich","Ballia","Balrampur","Banda","Barabanki","Bareilly","Basti","Bhadohi","Bijnor","Budaun","Bulandshahr","Chandauli","Chitrakoot","Deoria","Etah","Etawah","Faizabad","Farrukhabad","Fatehpur","Firozabad","Gautam Buddha Nagar","Ghaziabad","Ghazipur","Gonda","Gorakhpur","Hamirpur","Hapur (Panchsheel Nagar)","Hardoi","Hathras","Jalaun","Jaunpur","Jhansi","Kannauj","Kanpur Dehat","Kanpur Nagar","Kanshiram Nagar (Kasganj)","Kaushambi","Kushinagar (Padrauna)","Lakhimpur - Kheri","Lalitpur","Lucknow","Maharajganj","Mahoba","Mainpuri","Mathura","Mau","Meerut","Mirzapur","Moradabad","Muzaffarnagar","Pilibhit","Pratapgarh","RaeBareli","Rampur","Saharanpur","Sambhal (Bhim Nagar)","SantKabir Nagar","Shahjahanpur","Shamali (Prabuddh Nagar)","Shravasti","Siddharth Nagar","Sitapur","Sonbhadra","Sultanpur","Unnao","Varanasi"],
        "WEST BENGAL": ["Alipurduar","Bankura","Birbhum","Cooch Behar","DakshinDinajpur (South Dinajpur)","Darjeeling","Hooghly","Howrah","Jalpaiguri","Jhargram","Kalimpong","Kolkata","Malda","Murshidabad","Nadia","North 24 Parganas","PaschimMedinipur (West Medinipur)","Paschim (West) Burdwan (Bardhaman)","PurbaBurdwan (Bardhaman)","PurbaMedinipur (East Medinipur)","Purulia",
        "South 24 Parganas","Uttar Dinajpur (North Dinajpur)"],
        
        
        
        
        },
        
        }
        window.onload = function () {
        var countySel = document.getElementById("countySel"),
        stateSel = document.getElementById("stateSel"),
        districtSel = document.getElementById("districtSel");
        for (var country in stateObject) {
        countySel.options[countySel.options.length] = new Option(country, country);
        }
        countySel.onchange = function () {
        stateSel.length = 1; // remove all options bar first
        districtSel.length = 1; // remove all options bar first
        if (this.selectedIndex < 1) return; // done
        for (var state in stateObject[this.value]) {
        stateSel.options[stateSel.options.length] = new Option(state, state);
        }
        }
        countySel.onchange(); // reset in case page is reloaded
        stateSel.onchange = function () {
        districtSel.length = 1; // remove all options bar first
        if (this.selectedIndex < 1) return; // done
        var district = stateObject[countySel.value][this.value];
        for (var i = 0; i < district.length; i++) {
        districtSel.options[districtSel.options.length] = new Option(district[i], district[i]);
        }
        }
        }
        
        