import csv
import json


def pollCruncher(csv_in, delim, json_out):
    with open(csv_in, "rb") as infile:
        reader = csv.reader(infile, delimiter=delim)
        reader.next()
        master_dict = {}
        for row in reader:
            q_id = row[0]
            question = row[1]
            answer = row[2]
            all_likely_voters = row[3]
            men = row[4]
            women = row[5]
            age_18_39 = row[6]
            age_40_64 = row[7]
            age_o65 = row[8]
            white = row[9]
            black = row[10]
            hispanic = row[11]
            other_race = row[12]
            gop = row[13]
            dems = row[14]
            other_party = row[15]
            conservative = row[16]
            moderate = row[17]
            liberal = row[18]
            ideology_unsure = row[19]
            attended_hs = row[20]
            grad_hs = row[21]
            attended_coll = row[22]
            grad_coll = row[23]
            grad_school = row[24]
            married = row[25]
            unmarried = row[26]
            children = row[27]
            no_children = row[28]
            income_u30 = row[29]
            income_30_50 = row[30]
            income_50_100 = row[31]
            income_100_200 = row[32]
            income_o200 = row[33]
            income_ns = row[34]
            issue_ts = row[35]
            issue_ej = row[36]
            issue_e = row[37]
            issue_t = row[38]
            issue_ib = row[39]
            issue_h = row[40]
            issue_s = row[41]
            issue_o = row[42]
            issue_ns = row[43]
            notes = row[44]

            # does the key exist in master dict? if not, add it
            if q_id not in master_dict:
                master_dict[q_id] = {}

            # does the list of answers exist? if not, add it
            if 'answers' not in master_dict[q_id]:
                master_dict[q_id]['answers'] = []

            # add the shiz
            master_dict[q_id]['question'] = question

            a = {}
            a['text'] = answer
            a['lv'] = float(all_likely_voters)
            a['men'] = float(men)
            a['women'] = float(women)
            a['age_18_39'] = float(age_18_39)
            a['age_40_64'] = float(age_40_64)
            a['age_o65'] = float(age_o65)
            a['white'] = float(white)
            a['black'] = float(black)
            a['hispanic'] = float(hispanic)
            a['other_race'] = float(other_race)
            a['gop'] = float(gop)
            a['dems'] = float(dems)
            a['other_party'] = float(other_party)
            a['conservative'] = float(conservative)
            a['moderate'] = float(moderate)
            a['liberal'] = float(liberal)
            a['ideology_unsure'] = float(ideology_unsure)
            a['attended_hs'] = float(attended_hs)
            a['grad_hs'] = float(grad_hs)
            a['attended_coll'] = float(attended_coll)
            a['grad_coll'] = float(grad_coll)
            a['grad_school'] = float(grad_school)
            a['married'] = float(married)
            a['unmarried'] = float(unmarried)
            a['children'] = float(children)
            a['no_children'] = float(no_children)
            a['income_u30'] = float(income_u30)
            a['income_30_50'] = float(income_30_50)
            a['income_50_100'] = float(income_50_100)
            a['income_100_200'] = float(income_100_200)
            a['income_o200'] = float(income_o200)
            a['income_ns'] = float(income_ns)
            if issue_ts and issue_ts != "" and issue_ts != "~":
                a['issue_ts'] = float(issue_ts)
            if issue_ej and issue_ej != "" and issue_ej != "~":
                a['issue_ej'] = float(issue_ej)
            if issue_e and issue_e != "" and issue_e != "~":
                a['issue_e'] = float(issue_e)
            if issue_t and issue_t != "" and issue_t != "~":
                a['issue_t'] = float(issue_t)
            if issue_ib and issue_ib != "" and issue_ib != "~":
                a['issue_ib'] = float(issue_ib)
            if issue_h and issue_h != "" and issue_h != "~":
                a['issue_h'] = float(issue_h)
            if issue_s and issue_s != "" and issue_s != "~":
                a['issue_s'] = float(issue_s)
            if issue_o and issue_o != "" and issue_o != "~":
                a['issue_o'] = float(issue_o)
            if issue_ns and issue_ns != "" and issue_ns != "~":
                a['issue_ns'] = float(issue_ns)
            if notes and notes != "" and notes != "~":
                a['notes'] = notes
            master_dict[q_id]['answers'].append(a)

        with open(json_out, "wb") as jsout:
            jsout.write(json.dumps(master_dict))


pollCruncher(
    "/Users/cjwinchester/www/projects/texas-pulse-poll/src/data/data.csv",
    "\t",
    "/Users/cjwinchester/www/projects/texas-pulse-poll/src/data/data.json"
    )
