<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="css/core.css" />
		<title>Profile</title>
	</head>
<body>
<table class="profile_panel" cellspacing="0" cellpadding="0" align="center">
	<tr>
		<td class="profile_list_column" align="center">
			<div class="profile_List_head">Profiles</div>
			<div class="profile_search_head">
				Search
			</div>
			<div class="slc_results">
				<table class="table_results">
					<tr>
						<td>s</td>
					</tr>
				</table>
			</div>
		</td>
		<td align="center">
		
			<!-- Begin Student Information Header -->		
			<div class="student_panel">
				<span class="student_info">
					<div class="student_picture" >
						<img src="images/no_photo.png" alt="student picture" />
					</div>
					<div class="student_details">
						<p>
							Student Information
						</p>
					</div>
				</span>
				<span class="student_action_buttons">
					<p>
						<input type="button" value="Change Picture" />
					</p>
					<p>
						<input type="button" value="Block RFID" />
					</p>
					<p>
						<input type="button" value="Upload Pictures" />
					</p>
					
				</span>
			</div>
			<!-- End Student Information Header -->
			
			<!-- Begin Details -->
			<div class="details_panel">
				<div id="fetcher_list">
					<div class="details_">
						Fetchers
						<span style="float : right;"> 
							<button>Add Fetcher</button>
							&nbsp;
							<button>Import Fetcher</button>
						</span>
					</div>
				</div>
				
			</div>
			<!-- End Details -->
		</td>
	</tr>
</table>
</body>
</html>