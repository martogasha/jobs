<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $fillable = [
        'title','detail','link','linkName','detailOne','linkNameOne','linkOne','quote','quoteAuthor','detailTwo','linkNameTwo','linkTwo','detailThree','image','linkThree','LinkNameThree','detailTitleOneLink','detailTitleOne','titleTwo','titleTwoLinkName','detailTitleTwoLink','detailTitleTwo','titleThree','titleThreeLinkName','detailTitleThreeLink','detailTitleThree','titleFour','titleFourLinkName','detailTitleFourLink','detailTitleFour','titleFive','titleFiveLinkName','detailTitleFiveLink','detailTitleFive','titleSix','titleSixLinkName','detailTitleSixLink','detailTitleSix','titleSeven','titleSevenLinkName','detailTitleSevenLink','detailTitleSeven','titleEight','titleEightLinkName','detailTitleEightLink','detailTitleEight','titleNine','titleNineLinkName','detailTitleNineLink','detailTitleNine','titleTen','titleTenLinkName','detailTitleTenLink','detailTitleTen','titleConclusion','detailConclusion','linkConclusion','linkNameConclusion','detailOneConclusion','linkNameOneConclusion','linkOneConclusion','quoteConclusion','quoteAuthorConclusion','detailTwoConclusion','linkNameTwoConclusion','linkTwoConclusion','detailThreeConclusion','user_id'
    ];
}
