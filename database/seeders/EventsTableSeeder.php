<?php

namespace Database\Seeders;

use App\Models\Event;
use Illuminate\Database\Seeder;

class EventsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Event::create([
            'name' => 'Quadrantids Meteor Shower',
            'from' => '2024-01-3 00:00:00',
            'to' => '2024-01-4 23:59:59',
            'image' => 'Quadrantids_Meteor_Shower.jpg',
            'requiresBinoculars' => false,
            'details' => 'The Quadrantids is an above average shower, with up to 40 meteors per hour at its peak. It is thought to be produced by dust grains left behind by an extinct comet known as 2003 EH1, which was discovered in 2003. The shower runs annually from January 1-5. It peaks this year on the night of the 3rd and morning of the 4th. The waning gibbous moon will block out some of the fainter meteors, but if you are patient this could still be a good show. Best viewing will be from a dark location after midnight. Meteors will radiate from the constellation Bootes, but can appear anywhere in the sky.',
            'source' => 'http://www.seasky.org/astronomy/astronomy-calendar-2024.html',
        ]);
        Event::create([
            'name' => 'New Moon',
            'from' => '2024-01-11 13:59:00',
            'to' => '2024-01-11 23:59:59',
            'image' => 'New_Moon.jpg',
            'requiresBinoculars' => false,
            'details' => 'The Moon will located on the same side of the Earth as the Sun and will not be visible in the night sky. This phase occurs at 11:59 UTC. This is the best time of the month to observe faint objects such as galaxies and star clusters because there is no moonlight to interfere.',
            'source' => 'http://www.seasky.org/astronomy/astronomy-calendar-2024.html',
        ]);
        Event::create([
            'name' => 'Mercury at Greatest Western Elongation',
            'from' => '2024-01-12 18:50:00',
            'to' => '2024-01-12 23:59:59',
            'image' => 'Mercury_at_Greatest_Western_Elongation.jpg',
            'requiresBinoculars' => false,
            'details' => 'The planet Mercury reaches greatest western elongation of 23.5 degrees from the Sun. This is the best time to view Mercury since it will be at its highest point above the horizon in the morning sky. Look for the planet low in the eastern sky just before sunrise.',
            'source' => 'http://www.seasky.org/astronomy/astronomy-calendar-2024.html',
        ]);
        Event::create([
            'name' => 'Full Moon',
            'from' => '2024-01-25 19:55:00',
            'to' => '2024-01-25 23:59:59',
            'image' => 'Full_Moon.jpg',
            'requiresBinoculars' => false,
            'details' => 'The Moon will be located on the opposite side of the Earth as the Sun and its face will be will be fully illuminated. This phase occurs at 17:55 UTC. This full moon was known by early Native American tribes as the Wolf Moon because this was the time of year when hungry wolf packs howled outside their camps. This moon has also been know as the Old Moon and the Moon After Yule.',
            'source' => 'http://www.seasky.org/astronomy/astronomy-calendar-2024.html',
        ]);
        Event::create([
            'name' => 'New Moon',
            'from' => '2024-02-09 13:02:00',
            'to' => '2024-02-09 23:59:59',
            'image' => 'New_Moon.jpg',
            'requiresBinoculars' => false,
            'details' => 'The Moon will located on the same side of the Earth as the Sun and will not be visible in the night sky. This phase occurs at 23:00 UTC. This is the best time of the month to observe faint objects such as galaxies and star clusters because there is no moonlight to interfere.',
            'source' => 'http://www.seasky.org/astronomy/astronomy-calendar-2024.html',
        ]);
        Event::create([
            'name' => 'Full Moon',
            'from' => '2024-02-24 14:32:00',
            'to' => '2024-02-24 23:59:59',
            'image' => 'Full_Moon.jpg',
            'requiresBinoculars' => false,
            'details' => 'The Moon will be located on the opposite side of the Earth as the Sun and its face will be will be fully illuminated. This phase occurs at 12:32 UTC. This full moon was known by early Native American tribes as the Snow Moon because the heaviest snows usually fell during this time of the year. Since hunting is difficult, this moon has also been known by some tribes as the Hunger Moon, since the harsh weather made hunting difficult.',
            'source' => 'http://www.seasky.org/astronomy/astronomy-calendar-2024.html',
        ]);
        Event::create([
            'name' => 'New Moon',
            'from' => '2024-03-10 11:02:00',
            'to' => '2024-03-10 23:59:59',
            'image' => 'New_Moon.jpg',
            'requiresBinoculars' => false,
            'details' => 'The Moon will located on the same side of the Earth as the Sun and will not be visible in the night sky. This phase occurs at 09:02 UTC. This is the best time of the month to observe faint objects such as galaxies and star clusters because there is no moonlight to interfere.',
            'source' => 'http://www.seasky.org/astronomy/astronomy-calendar-2024.html',
        ]);
        Event::create([
            'name' => 'March Equinox',
            'from' => '2024-03-20 05:01:00',
            'to' => '2024-03-20 23:59:59',
            'image' => 'March_Equinox.jpg',
            'requiresBinoculars' => false,
            'details' => 'The March equinox occurs at 03:01 UTC. The Sun will shine directly on the equator and there will be nearly equal amounts of day and night throughout the world. This is also the first day of spring (vernal equinox) in the Northern Hemisphere and the first day of fall (autumnal equinox) in the Southern Hemisphere.',
            'source' => 'http://www.seasky.org/astronomy/astronomy-calendar-2024.html',
        ]);
        Event::create([
            'name' => 'Mercury at Greatest Eastern Elongation',
            'from' => '2024-03-24 00:00:00',
            'to' => '2024-03-24 23:59:59',
            'image' => 'Mercury_at_Greatest_Eastern_Elongation.jpg',
            'requiresBinoculars' => false,
            'details' => 'The planet Mercury reaches greatest eastern elongation of 18.7 degrees from the Sun. This is the best time to view Mercury since it will be at its highest point above the horizon in the evening sky. Look for the planet low in the western sky just after sunset.',
            'source' => 'http://www.seasky.org/astronomy/astronomy-calendar-2024.html',
        ]);
        Event::create([
            'name' => 'Full Moon',
            'from' => '2024-03-25 09:02:00',
            'to' => '2024-03-25 23:59:59',
            'image' => 'Full_Moon.jpg',
            'requiresBinoculars' => false,
            'details' => 'The Moon will be located on the opposite side of the Earth as the Sun and its face will be will be fully illuminated. This phase occurs at 07:02 UTC. This full moon was known by early Native American tribes as the Worm Moon because this was the time of year when the ground would begin to soften and the earthworms would reappear. This moon has also been known as the Crow Moon, the Crust Moon, the Sap Moon, and the Lenten Moon.',
            'source' => 'http://www.seasky.org/astronomy/astronomy-calendar-2024.html',
        ]);
        Event::create([
            'name' => 'Penumbral Lunar Eclipse',
            'from' => '2024-03-25 00:00:00',
            'to' => '2024-03-25 23:59:59',
            'image' => 'Penumbral_Lunar_Eclipse.jpg',
            'requiresBinoculars' => true,
            'details' => "A penumbral lunar eclipse occurs when the Moon passes through the Earth's partial shadow, or penumbra. During this type of eclipse the Moon will darken slightly but not completely. The eclipse will be visible throughout all North America, Mexico, Central America, and South America.",
            'source' => 'http://www.seasky.org/astronomy/astronomy-calendar-2024.html',
        ]);
        Event::create([
            'name' => 'New Moon',
            'from' => '2024-04-08 20:22:00',
            'to' => '2024-04-08 23:59:59',
            'image' => 'New_Moon.jpg',
            'requiresBinoculars' => false,
            'details' => 'The Moon will located on the same side of the Earth as the Sun and will not be visible in the night sky. This phase occurs at 18:22 UTC. This is the best time of the month to observe faint objects such as galaxies and star clusters because there is no moonlight to interfere.',
            'source' => 'http://www.seasky.org/astronomy/astronomy-calendar-2024.html',
        ]);
        Event::create([
            'name' => 'Total Solar Eclipse',
            'from' => '2024-04-08 00:00:00',
            'to' => '2024-04-08 23:59:59',
            'image' => 'Total_Solar_Eclipse.jpg',
            'requiresBinoculars' => false,
            'details' => "A total solar eclipse occurs when the moon completely blocks the Sun, revealing the Sun's beautiful outer atmosphere known as the corona. This is a rare, once-in-a-lifetime event for viewers in the United States. The last total solar eclipse visible in the continental United States occurred in 2017 and the next one will not take place until 2045. The path of totality will begin in the Pacific Ocean and move across parts of Mexico and the eastern United States and Nova Scotia. The total eclipse will be visible in parts of Texas, Arkansas, Missouri, Illinois, Indiana, Kentucky, Ohio, Pennsylvania, New York, Vermont, New Hampshire, and Maine.",
            'source' => 'http://www.seasky.org/astronomy/astronomy-calendar-2024.html',
        ]);
        Event::create([
            'name' => 'Lyrids Meteor Shower',
            'from' => '2024-04-22 00:00:00',
            'to' => '2024-04-23 23:59:59',
            'image' => 'Lyrids_Meteor_Shower.jpg',
            'requiresBinoculars' => false,
            'details' => 'The Lyrids is an average shower, usually producing about 20 meteors per hour at its peak. It is produced by dust particles left behind by comet C/1861 G1 Thatcher, which was discovered in 1861. The shower runs annually from April 16-25. It peaks this year on the night of the night of the 22nd and morning of the 23rd. These meteors can sometimes produce bright dust trails that last for several seconds. Unfortunately the glare of the full moon will block out all but the brightest meteors this year. But if you are patient, you may still be able to catch a few good ones. Best viewing will be from a dark location after midnight. Meteors will radiate from the constellation Lyra, but can appear anywhere in the sky.',
            'source' => 'http://www.seasky.org/astronomy/astronomy-calendar-2024.html',
        ]);
        Event::create([
            'name' => 'Full Moon',
            'from' => '2024-04-23 13:50:00',
            'to' => '2024-04-23 23:59:59',
            'image' => 'Full_Moon.jpg',
            'requiresBinoculars' => false,
            'details' => 'The Moon will be located on the opposite side of the Earth as the Sun and its face will be will be fully illuminated. This phase occurs at 23:50 UTC. This full moon was known by early Native American tribes as the Pink Moon because it marked the appearance of the moss pink, or wild ground phlox, which is one of the first spring flowers. This moon has also been known as the Sprouting Grass Moon, the Growing Moon, and the Egg Moon. Many coastal tribes called it the Fish Moon because this was the time that the shad swam upstream to spawn.',
            'source' => 'http://www.seasky.org/astronomy/astronomy-calendar-2024.html',
        ]);
        Event::create([
            'name' => 'Eta Aquarids Meteor Shower',
            'from' => '2024-05-06 00:00:00',
            'to' => '2024-05-07 23:59:59',
            'image' => 'Eta_Aquarids_Meteor_Shower.jpg',
            'requiresBinoculars' => false,
            'details' => 'The Eta Aquarids is an above average shower, capable of producing up to 60 meteors per hour at its peak. Most of the activity is seen in the Southern Hemisphere. In the Northern Hemisphere, the rate can reach about 30 meteors per hour. It is produced by dust particles left behind by comet Halley, which has been observed since ancient times. The shower runs annually from April 19 to May 28. It peaks this year on the night of May 6 and the morning of the May 7. The nearly new moon means dark skies for what should be an excellent show this year. Best viewing will be from a dark location after midnight. Meteors will radiate from the constellation Aquarius, but can appear anywhere in the sky.',
            'source' => 'http://www.seasky.org/astronomy/astronomy-calendar-2024.html',
        ]);
        Event::create([
            'name' => 'New Moon',
            'from' => '2024-05-08 05:23:00',
            'to' => '2024-05-08 23:59:59',
            'image' => 'New_Moon.jpg',
            'requiresBinoculars' => false,
            'details' => 'The Moon will located on the same side of the Earth as the Sun and will not be visible in the night sky. This phase occurs at 03:23 UTC. This is the best time of the month to observe faint objects such as galaxies and star clusters because there is no moonlight to interfere.',
            'source' => 'http://www.seasky.org/astronomy/astronomy-calendar-2024.html',
        ]);
        Event::create([
            'name' => 'Mercury at Greatest Western Elongation',
            'from' => '2024-05-09 00:00:00',
            'to' => '2024-05-09 23:59:59',
            'image' => 'Mercury_at_Greatest_Western_Elongation.jpg',
            'requiresBinoculars' => false,
            'details' => 'The planet Mercury reaches greatest western elongation of 26.4 degrees from the Sun. This is the best time to view Mercury since it will be at its highest point above the horizon in the morning sky. Look for the planet low in the eastern sky just before sunrise.',
            'source' => 'http://www.seasky.org/astronomy/astronomy-calendar-2024.html',
        ]);
        Event::create([
            'name' => 'Full Moon',
            'from' => '2024-05-23 15:55:00',
            'to' => '2024-05-23 23:59:59',
            'image' => 'Full_Moon.jpg',
            'requiresBinoculars' => false,
            'details' => 'The Moon will be located on the opposite side of the Earth as the Sun and its face will be will be fully illuminated. This phase occurs at 13:55 UTC. This full moon was known by early Native American tribes as the Flower Moon because this was the time of year when spring flowers appeared in abundance. This moon has also been known as the Corn Planting Moon and the Milk Moon.',
            'source' => 'http://www.seasky.org/astronomy/astronomy-calendar-2024.html',
        ]);
        Event::create([
            'name' => 'New Moon',
            'from' => '2024-06-06 14:39:00',
            'to' => '2024-06-06 23:59:59',
            'image' => 'New_Moon.jpg',
            'requiresBinoculars' => false,
            'details' => 'The Moon will located on the same side of the Earth as the Sun and will not be visible in the night sky. This phase occurs at 12:39 UTC. This is the best time of the month to observe faint objects such as galaxies and star clusters because there is no moonlight to interfere.',
            'source' => 'http://www.seasky.org/astronomy/astronomy-calendar-2024.html',
        ]);
        Event::create([
            'name' => 'June Solstice',
            'from' => '2024-06-20 11:46:00',
            'to' => '2024-06-20 23:59:59',
            'image' => 'June_Solstice.jpg',
            'requiresBinoculars' => false,
            'details' => 'The June solstice occurs at 20:46 UTC. The North Pole of the earth will be tilted toward the Sun, which will have reached its northernmost position in the sky and will be directly over the Tropic of Cancer at 23.44 degrees north latitude. This is the first day of summer (summer solstice) in the Northern Hemisphere and the first day of winter (winter solstice) in the Southern Hemisphere.',
            'source' => 'http://www.seasky.org/astronomy/astronomy-calendar-2024.html',
        ]);
        Event::create([
            'name' => 'Full Moon',
            'from' => '2024-06-22 00:00:00',
            'to' => '2024-06-22 23:59:59',
            'image' => 'Full_Moon.jpg',
            'requiresBinoculars' => false,
            'details' => 'The Moon will be located on the opposite side of the Earth as the Sun and its face will be will be fully illuminated. This phase occurs at 01:09 UTC. This full moon was known by early Native American tribes as the Strawberry Moon because it signaled the time of year to gather ripening fruit. It also coincides with the peak of the strawberry harvesting season. This moon has also been known as the Rose Moon and the Honey Moon.',
            'source' => 'http://www.seasky.org/astronomy/astronomy-calendar-2024.html',
        ]);
        Event::create([
            'name' => 'New Moon',
            'from' => '2024-07-05 00:59:00',
            'to' => '2024-07-05 23:59:59',
            'image' => 'New_Moon.jpg',
            'requiresBinoculars' => false,
            'details' => 'The Moon will located on the same side of the Earth as the Sun and will not be visible in the night sky. This phase occurs at 22:59 UTC. This is the best time of the month to observe faint objects such as galaxies and star clusters because there is no moonlight to interfere.',
            'source' => 'http://www.seasky.org/astronomy/astronomy-calendar-2024.html',
        ]);
        Event::create([
            'name' => 'Full Moon',
            'from' => '2024-07-21 00:18:00',
            'to' => '2024-07-21 23:59:59',
            'image' => 'Full_Moon.jpg',
            'requiresBinoculars' => false,
            'details' => 'The Moon will be located on the opposite side of the Earth as the Sun and its face will be will be fully illuminated. This phase occurs at 10:18 UTC. This full moon was known by early Native American tribes as the Buck Moon because the male buck deer would begin to grow their new antlers at this time of year. This moon has also been known as the Thunder Moon and the Hay Moon.',
            'source' => 'http://www.seasky.org/astronomy/astronomy-calendar-2024.html',
        ]);
        Event::create([
            'name' => 'Mercury at Greatest Eastern Elongation',
            'from' => '2024-07-22 00:00:00',
            'to' => '2024-07-22 23:59:59',
            'image' => 'Mercury_at_Greatest_Eastern_Elongation.jpg',
            'requiresBinoculars' => false,
            'details' => 'The planet Mercury reaches greatest eastern elongation of 26.9 degrees from the Sun. This is the best time to view Mercury since it will be at its highest point above the horizon in the evening sky. Look for the planet low in the western sky just after sunset.',
            'source' => 'http://www.seasky.org/astronomy/astronomy-calendar-2024.html',
        ]);
        Event::create([
            'name' => 'Delta Aquarids Meteor Shower',
            'from' => '2024-07-28 00:00:00',
            'to' => '2024-07-29 23:59:59',
            'image' => 'Delta_Aquarids_Meteor_Shower.jpg',
            'requiresBinoculars' => false,
            'details' => 'The Delta Aquarids is an average shower that can produce up to 20 meteors per hour at its peak. It is produced by debris left behind by comets Marsden and Kracht. The shower runs annually from July 12 to August 23. It peaks this year on the night of July 28 and morning of July 29. The second quarter moon will block many of the fainter meteors this year. But if you are patient, you should still be able to catch a few good ones. Best viewing will be from a dark location after midnight. Meteors will radiate from the constellation Aquarius, but can appear anywhere in the sky.',
            'source' => 'http://www.seasky.org/astronomy/astronomy-calendar-2024.html',
        ]);
        Event::create([
            'name' => 'New Moon',
            'from' => '2024-08-04 13:15:00',
            'to' => '2024-08-04 23:59:59',
            'image' => 'New_Moon.jpg',
            'requiresBinoculars' => false,
            'details' => 'The Moon will located on the same side of the Earth as the Sun and will not be visible in the night sky. This phase occurs at 11:15 UTC. This is the best time of the month to observe faint objects such as galaxies and star clusters because there is no moonlight to interfere.',
            'source' => 'http://www.seasky.org/astronomy/astronomy-calendar-2024.html',
        ]);
        Event::create([
            'name' => 'Perseids Meteor Shower',
            'from' => '2024-08-12 00:00:00',
            'to' => '2024-08-13 23:59:59',
            'image' => 'Perseids_Meteor_Shower.jpg',
            'requiresBinoculars' => false,
            'details' => 'The Perseids is one of the best meteor showers to observe, producing up to 60 meteors per hour at its peak. It is produced by comet Swift-Tuttle, which was discovered in 1862. The Perseids are famous for producing a large number of bright meteors. The shower runs annually from July 17 to August 24. It peaks this year on the night of August 11 and the morning of August 12. The first quarter moon will block out some of the fainter meteors in the early evening. But the Moon will set shortly after midnight leaving dark skies for what could be an excellent early morning show. Best viewing will be from a dark location after midnight. Meteors will radiate from the constellation Perseus, but can appear anywhere in the sky.',
            'source' => 'http://www.seasky.org/astronomy/astronomy-calendar-2024.html',
        ]);
        Event::create([
            'name' => 'Full Moon, Blue Moon',
            'from' => '2024-08-19 20:27:00',
            'to' => '2024-08-19 23:59:59',
            'image' => 'FullMoon_BlueMoon.jpg',
            'requiresBinoculars' => false,
            'details' => 'The Moon will be located on the opposite side of the Earth as the Sun and its face will be will be fully illuminated. This phase occurs at 18:27 UTC. This full moon was known by early Native American tribes as the Sturgeon Moon because the large sturgeon fish of the Great Lakes and other major lakes were more easily caught at this time of year. This moon has also been known as the Green Corn Moon and the Grain Moon. Since this is the third of four full moons in this season, it is known as a blue moon. This rare calendar event only happens once every few years, giving rise to the term, “once in a blue moon.” There are normally only three full moons in each season of the year. But since full moons occur every 29.53 days, occasionally a season will contain 4 full moons. The extra full moon of the season is known as a blue moon. Blue moons occur on average once every 2.7 years.',
            'source' => 'http://www.seasky.org/astronomy/astronomy-calendar-2024.html',
        ]);
        Event::create([
            'name' => 'New Moon',
            'from' => '2024-09-03 15:57:00',
            'to' => '2024-09-03 23:59:59',
            'image' => 'New_Moon.jpg',
            'requiresBinoculars' => false,
            'details' => 'The Moon will located on the same side of the Earth as the Sun and will not be visible in the night sky. This phase occurs at 01:57 UTC. This is the best time of the month to observe faint objects such as galaxies and star clusters because there is no moonlight to interfere.',
            'source' => 'http://www.seasky.org/astronomy/astronomy-calendar-2024.html',
        ]);
        Event::create([
            'name' => 'Mercury at Greatest Western Elongation',
            'from' => '2024-09-05 00:00:00',
            'to' => '2024-09-05 23:59:59',
            'image' => 'Mercury_at_Greatest_Western_Elongation.jpg',
            'requiresBinoculars' => false,
            'details' => 'The planet Mercury reaches greatest western elongation of 18.1 degrees from the Sun. This is the best time to view Mercury since it will be at its highest point above the horizon in the morning sky. Look for the planet low in the eastern sky just before sunrise.',
            'source' => 'http://www.seasky.org/astronomy/astronomy-calendar-2024.html',
        ]);
        Event::create([
            'name' => 'Saturn at Opposition',
            'from' => '2024-09-08 00:00:00',
            'to' => '2024-09-08 23:59:59',
            'image' => 'Saturn_at_Opposition.jpg',
            'requiresBinoculars' => false,
            'details' => "The ringed planet will be at its closest approach to Earth and its face will be fully illuminated by the Sun. It will be brighter than any other time of the year and will be visible all night long. This is the best time to view and photograph Saturn and its moons. A medium-sized or larger telescope will allow you to see Saturn's rings and a few of its brightest moons.",
            'source' => 'http://www.seasky.org/astronomy/astronomy-calendar-2024.html',
        ]);
        Event::create([
            'name' => 'Full Moon, Supermoon',
            'from' => '2024-09-08 00:00:00',
            'to' => '2024-09-08 23:59:59',
            'image' => 'FullMoon_Supermoon.jpg',
            'requiresBinoculars' => false,
            'details' => 'The Moon will be located on the opposite side of the Earth as the Sun and its face will be will be fully illuminated. This phase occurs at 02:36 UTC. This full moon was known by early Native American tribes as the Corn Moon because the corn is harvested around this time of year. This moon is also known as the Harvest Moon. The Harvest Moon is the full moon that occurs closest to the September equinox each year. This is also the first of three supermoons for 2024. The Moon will be near its closest approach to the Earth and may look slightly larger and brighter than usual.',
            'source' => 'http://www.seasky.org/astronomy/astronomy-calendar-2024.html',
        ]);
        Event::create([
            'name' => 'Partial Lunar Eclipse',
            'from' => '2024-09-18 00:00:00',
            'to' => '2024-09-18 23:59:59',
            'image' => 'Partial_Lunar_Eclipse.jpg',
            'requiresBinoculars' => true,
            'details' => "A partial lunar eclipse occurs when the Moon passes through the Earth's partial shadow, or penumbra, and only a portion of it passes through the darkest shadow, or umbra. During this type of eclipse a part of the Moon will darken as it moves through the Earth's shadow. The eclipse will be visible throughout most of North America, Mexico, Central America, South America, the Atlantic Ocean, and most of Europe and Africa.",
            'source' => 'http://www.seasky.org/astronomy/astronomy-calendar-2024.html',
        ]);
        Event::create([
            'name' => 'Neptune at Opposition',
            'from' => '2024-09-20 00:00:00',
            'to' => '2024-09-20 23:59:59',
            'image' => 'Neptune_at_Opposition.jpg',
            'requiresBinoculars' => false,
            'details' => "The blue giant planet will be at its closest approach to Earth and its face will be fully illuminated by the Sun. It will be brighter than any other time of the year and will be visible all night long. This is the best time to view and photograph Neptune. Due to its extreme distance from Earth, it will only appear as a tiny blue dot in all but the most powerful telescopes.",
            'source' => 'http://www.seasky.org/astronomy/astronomy-calendar-2024.html',
        ]);
        Event::create([
            'name' => 'September Equinox',
            'from' => '2024-09-22 14:39:00',
            'to' => '2024-09-22 23:59:59',
            'image' => 'September_Equinox.jpg',
            'requiresBinoculars' => false,
            'details' => "The September equinox occurs at 12:39 UTC. The Sun will shine directly on the equator and there will be nearly equal amounts of day and night throughout the world. This is also the first day of fall (autumnal equinox) in the Northern Hemisphere and the first day of spring (vernal equinox) in the Southern Hemisphere.",
            'source' => 'http://www.seasky.org/astronomy/astronomy-calendar-2024.html',
        ]);
        Event::create([
            'name' => 'New Moon',
            'from' => '2024-10-02 00:00:00',
            'to' => '2024-10-02 23:59:59',
            'image' => 'New_Moon.jpg',
            'requiresBinoculars' => false,
            'details' => "The Moon will located on the same side of the Earth as the Sun and will not be visible in the night sky. This phase occurs at 18:51 UTC. This is the best time of the month to observe faint objects such as galaxies and star clusters because there is no moonlight to interfere.",
            'source' => 'http://www.seasky.org/astronomy/astronomy-calendar-2024.html',
        ]);
        Event::create([
            'name' => 'Annular Solar Eclipse',
            'from' => '2024-10-02 00:00:00',
            'to' => '2024-10-02 23:59:59',
            'image' => 'Annular_Solar_Eclipse.jpg',
            'requiresBinoculars' => true,
            'details' => "An annular solar eclipse occurs when the Moon is too far away from the Earth to completely cover the Sun. This results in a ring of light around the darkened Moon. The Sun's corona is not visible during an annular eclipse. The eclipse path will begin in the Pacific Ocean off the coast of South America and move across parts of southern Chile and Argentina. A partial eclipse will be visible throughout most of southern South America.",
            'source' => 'http://www.seasky.org/astronomy/astronomy-calendar-2024.html',
        ]);
        Event::create([
            'name' => 'Draconids Meteor Shower',
            'from' => '2024-10-07 00:00:00',
            'to' => '2024-10-07 23:59:59',
            'image' => 'Draconids_Meteor_Shower.jpg',
            'requiresBinoculars' => false,
            'details' => "The Draconids is a minor meteor shower producing only about 10 meteors per hour. It is produced by dust grains left behind by comet 21P Giacobini-Zinner, which was first discovered in 1900. The Draconids is an unusual shower in that the best viewing is in the early evening instead of early morning like most other showers. The shower runs annually from October 6-10 and peaks this year on the the night of the 7th. The second quarter moon will ensure dark skies in the early evening for what could be a good show. If you are patient, you may still be able to catch a few good ones. Best viewing will be in the early evening from a dark location far away from city lights. Meteors will radiate from the constellation Draco, but can appear anywhere in the sky.",
            'source' => 'http://www.seasky.org/astronomy/astronomy-calendar-2024.html',
        ]);
        Event::create([
            'name' => 'Full Moon, Supermoon',
            'from' => '2024-10-17 00:00:00',
            'to' => '2024-10-17 23:59:59',
            'image' => 'FullMoon_Supermoon.jpg',
            'requiresBinoculars' => false,
            'details' => "The Moon will be located on the opposite side of the Earth as the Sun and its face will be will be fully illuminated. This phase occurs at 11:28 UTC. This full moon was known by early Native American tribes as the Hunters Moon because at this time of year the leaves are falling and the game is fat and ready to hunt. This moon has also been known as the Travel Moon and the Blood Moon. This is also the second of three supermoons for 2024. The Moon will be near its closest approach to the Earth and may look slightly larger and brighter than usual.",
            'source' => 'http://www.seasky.org/astronomy/astronomy-calendar-2024.html',
        ]);
        Event::create([
            'name' => 'Orionids Meteor Shower',
            'from' => '2024-10-21 00:00:00',
            'to' => '2024-10-22 23:59:59',
            'image' => 'Orionids_Meteor_Shower.jpg',
            'requiresBinoculars' => false,
            'details' => "The Orionids is an average shower producing up to 20 meteors per hour at its peak. It is produced by dust grains left behind by comet Halley, which has been known and observed since ancient times. The shower runs annually from October 2 to November 7. The shower peaks this year on the night of October 21 and the morning of October 22. The waning gibbous moon will block out most of the fainter meteors this year. But if you are patient, you should still be able to catch a few good ones. Best viewing will be from a dark location after midnight. Meteors will radiate from the constellation Orion, but can appear anywhere in the sky.",
            'source' => 'http://www.seasky.org/astronomy/astronomy-calendar-2024.html',
        ]);
        Event::create([
            'name' => 'New Moon',
            'from' => '2024-11-01 00:00:00',
            'to' => '2024-11-01 23:59:59',
            'image' => 'New_Moon.jpg',
            'requiresBinoculars' => false,
            'details' => "The Moon will located on the same side of the Earth as the Sun and will not be visible in the night sky. This phase occurs at 12:49 UTC. This is the best time of the month to observe faint objects such as galaxies and star clusters because there is no moonlight to interfere.",
            'source' => 'http://www.seasky.org/astronomy/astronomy-calendar-2024.html',
        ]);
        Event::create([
            'name' => 'Taurids Meteor Shower',
            'from' => '2024-11-04 00:00:00',
            'to' => '2024-11-05 23:59:59',
            'image' => 'Taurids_Meteor_Shower.jpg',
            'requiresBinoculars' => false,
            'details' => "The Taurids is a long-running minor meteor shower producing only about 5-10 meteors per hour. It is unusual in that it consists of two separate streams. The first is produced by dust grains left behind by Asteroid 2004 TG10. The second stream is produced by debris left behind by Comet 2P Encke. The shower runs annually from September 7 to December 10. It peaks this year on the the night of November 4. The first quarter moon will block out all but the brightest meteors this year. If you are patient, you may still be able to catch a few good ones. Best viewing will be just after midnight from a dark location far away from city lights. Meteors will radiate from the constellation Taurus, but can appear anywhere in the sky.",
            'source' => 'http://www.seasky.org/astronomy/astronomy-calendar-2024.html',
        ]);
        Event::create([
            'name' => 'Full Moon, Supermoon',
            'from' => '2024-11-15 00:00:00',
            'to' => '2024-11-15 23:59:59',
            'image' => 'FullMoon_Supermoon.jpg',
            'requiresBinoculars' => false,
            'details' => "The Moon will be located on the opposite side of the Earth as the Sun and its face will be will be fully illuminated. This phase occurs at 21:30 UTC. This full moon was known by early Native American tribes as the Beaver Moon because this was the time of year to set the beaver traps before the swamps and rivers froze. It has also been known as the Frosty Moon and the Dark Moon. This is also the last of three supermoons for 2024. The Moon will be near its closest approach to the Earth and may look slightly larger and brighter than usual.",
            'source' => 'http://www.seasky.org/astronomy/astronomy-calendar-2024.html',
        ]);
        Event::create([
            'name' => 'Mercury at Greatest Eastern Elongation',
            'from' => '2024-11-16 00:00:00',
            'to' => '2024-11-16 23:59:59',
            'image' => 'Mercury_at_Greatest_Eastern_Elongation.jpg',
            'requiresBinoculars' => false,
            'details' => "The planet Mercury reaches greatest eastern elongation of 22.5 degrees from the Sun. This is the best time to view Mercury since it will be at its highest point above the horizon in the evening sky. Look for the planet low in the western sky just after sunset.",
            'source' => 'http://www.seasky.org/astronomy/astronomy-calendar-2024.html',
        ]);
        Event::create([
            'name' => 'Uranus at Opposition',
            'from' => '2024-11-17 00:00:00',
            'to' => '2024-11-17 23:59:59',
            'image' => 'Uranus_at_Opposition.jpg',
            'requiresBinoculars' => false,
            'details' => "The blue-green planet will be at its closest approach to Earth and its face will be fully illuminated by the Sun. It will be brighter than any other time of the year and will be visible all night long. This is the best time to view Uranus. Due to its distance, it will only appear as a tiny blue-green dot in all but the most powerful telescopes.",
            'source' => 'http://www.seasky.org/astronomy/astronomy-calendar-2024.html',
        ]);
        Event::create([
            'name' => 'Leonids Meteor Shower',
            'from' => '2024-11-17 00:00:00',
            'to' => '2024-11-18 23:59:59',
            'image' => 'Leonids_Meteor_Shower.jpg',
            'requiresBinoculars' => false,
            'details' => "The Leonids is an average shower, producing up to 15 meteors per hour at its peak. This shower is unique in that it has a cyclonic peak about every 33 years where hundreds of meteors per hour can be seen. That last of these occurred in 2001. The Leonids is produced by dust grains left behind by comet Tempel-Tuttle, which was discovered in 1865. The shower runs annually from November 6-30. It peaks this year on the night of the 17th and morning of the 18th. Unfortunately the nearly full moon will block all but the brightest meteors this year. If you are patient, you may still be able to catch a few good ones. Best viewing will be from a dark location after midnight. Meteors will radiate from the constellation Leo, but can appear anywhere in the sky.",
            'source' => 'http://www.seasky.org/astronomy/astronomy-calendar-2024.html',
        ]);
        Event::create([
            'name' => 'New Moon',
            'from' => '2024-12-01 00:00:00',
            'to' => '2024-12-01 23:59:59',
            'image' => 'New_Moon.jpg',
            'requiresBinoculars' => false,
            'details' => "The Moon will located on the same side of the Earth as the Sun and will not be visible in the night sky. This phase occurs at 06:22 UTC. This is the best time of the month to observe faint objects such as galaxies and star clusters because there is no moonlight to interfere.",
            'source' => 'http://www.seasky.org/astronomy/astronomy-calendar-2024.html',
        ]);
        Event::create([
            'name' => 'Jupiter at Opposition',
            'from' => '2024-12-07 00:00:00',
            'to' => '2024-12-07 23:59:59',
            'image' => 'Jupiter_at_Opposition.jpg',
            'requiresBinoculars' => false,
            'details' => "The giant planet will be at its closest approach to Earth and its face will be fully illuminated by the Sun. It will be brighter than any other time of the year and will be visible all night long. This is the best time to view and photograph Jupiter and its moons. A medium-sized telescope should be able to show you some of the details in Jupiter's cloud bands. A good pair of binoculars should allow you to see Jupiter's four largest moons, appearing as bright dots on either side of the planet.",
            'source' => 'http://www.seasky.org/astronomy/astronomy-calendar-2024.html',
        ]);
        Event::create([
            'name' => 'Geminids Meteor Shower',
            'from' => '2024-12-13 00:00:00',
            'to' => '2024-12-14 23:59:59',
            'image' => 'Geminids_Meteor_Shower.jpg',
            'requiresBinoculars' => false,
            'details' => "The Geminids is the king of the meteor showers. It is considered by many to be the best shower in the heavens, producing up to 120 multicolored meteors per hour at its peak. It is produced by debris left behind by an asteroid known as 3200 Phaethon, which was discovered in 1982. The shower runs annually from December 7-17. It peaks this year on the night of the 13th and morning of the 14th. The nearly full moon will block out all but the brightest meteors this year. But if you are patient, you may still be able to catch a few good ones. Best viewing will be from a dark location after midnight. Meteors will radiate from the constellation Gemini, but can appear anywhere in the sky.",
            'source' => 'http://www.seasky.org/astronomy/astronomy-calendar-2024.html',
        ]);
        Event::create([
            'name' => 'Full Moon',
            'from' => '2024-12-15 00:00:00',
            'to' => '2024-12-15 23:59:59',
            'image' => 'Full_Moon.jpg',
            'requiresBinoculars' => false,
            'details' => "The Moon will be located on the opposite side of the Earth as the Sun and its face will be will be fully illuminated. This phase occurs at 09:03 UTC. This full moon was known by early Native American tribes as the Cold Moon because this is the time of year when the cold winter air settles in and the nights become long and dark. This moon has also been known as the Long Nights Moon and the Moon Before Yule.",
            'source' => 'http://www.seasky.org/astronomy/astronomy-calendar-2024.html',
        ]);
        Event::create([
            'name' => 'December Solstice',
            'from' => '2024-12-21 11:17:00',
            'to' => '2024-12-21 23:59:59',
            'image' => 'December_Solstice.jpg',
            'requiresBinoculars' => false,
            'details' => "The December solstice occurs at 09:17 UTC. The South Pole of the earth will be tilted toward the Sun, which will have reached its southernmost position in the sky and will be directly over the Tropic of Capricorn at 23.44 degrees south latitude. This is the first day of winter (winter solstice) in the Northern Hemisphere and the first day of summer (summer solstice) in the Southern Hemisphere.",
            'source' => 'http://www.seasky.org/astronomy/astronomy-calendar-2024.html',
        ]);
        Event::create([
            'name' => 'Ursids Meteor Shower',
            'from' => '2024-12-21 00:00:00',
            'to' => '2024-12-22 23:59:59',
            'image' => 'Ursids_Meteor_Shower.jpg',
            'requiresBinoculars' => false,
            'details' => "The Ursids is a minor meteor shower producing about 5-10 meteors per hour. It is produced by dust grains left behind by comet Tuttle, which was first discovered in 1790. The shower runs annually from December 17-25. It peaks this year on the the night of the 21st and morning of the 22nd. The waning gibbous moon will block out many of the fainter meteors this year. If you are patient, you should still be able to catch some of the brighter ones. Best viewing will be just after midnight from a dark location far away from city lights. Meteors will radiate from the constellation Ursa Minor, but can appear anywhere in the sky.",
            'source' => 'http://www.seasky.org/astronomy/astronomy-calendar-2024.html',
        ]);
        Event::create([
            'name' => 'JMercury at Greatest Western Elongation',
            'from' => '2024-12-25 00:00:00',
            'to' => '2024-12-25 23:59:59',
            'image' => 'JMercury_at_Greatest_Western_Elongation.jpg',
            'requiresBinoculars' => false,
            'details' => "The planet Mercury reaches greatest western elongation of 22 degrees from the Sun. This is the best time to view Mercury since it will be at its highest point above the horizon in the morning sky. Look for the planet low in the eastern sky just before sunrise.",
            'source' => 'http://www.seasky.org/astronomy/astronomy-calendar-2024.html',
        ]);
        Event::create([
            'name' => 'New Moon',
            'from' => '2024-12-30 00:00:00',
            'to' => '2024-12-30 23:59:59',
            'image' => 'New_Moon.jpg',
            'requiresBinoculars' => false,
            'details' => "The Moon will located on the same side of the Earth as the Sun and will not be visible in the night sky. This phase occurs at 22:28 UTC. This is the best time of the month to observe faint objects such as galaxies and star clusters because there is no moonlight to interfere.",
            'source' => 'http://www.seasky.org/astronomy/astronomy-calendar-2024.html',
        ]);
    }
}
